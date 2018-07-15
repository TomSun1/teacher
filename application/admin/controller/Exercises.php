<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use think\Db;
use org\Upload;
use think\App;

class Exercises extends Base {

    public function index() {
        $this->assign('action',Request::instance()->action());
        if (Request::instance()->param('sid')) {
            $sid = Request::instance()->param('sid');
            $exercises = model('Exercises')->where('subject_id',$sid)->paginate(50);
            for($i = 0; $i < count($exercises); $i++) {
                $answerstr = '';
                $exercises[$i]['answer'] = explode('-=~=-=~=-',$exercises[$i]['answer']);
                $answercount = count($exercises[$i]['answer']);
                for($j=0;$j<$answercount;$j++) {
                    if (intval(pow(2,$j) & $exercises[$i]['correct_answer']) > 0) {
                        $answerstr .= chr($j+65);
                    }
                }
                $exercises[$i]['right_answer'] = $answerstr;
            }
            $this->assign('sid', $sid);
            $this->assign('exercises', $exercises);
            return $this->fetch('exercises');
        } else {
            $subjects = model('Subject')->subjects();
            $lists = $subjects->toArray();
            $page = $subjects->render();
            $trees = sortOut($lists['data'],-1,0,'&nbsp;&nbsp;&nbsp;');
            $this->assign('lists',$trees);
            $this->assign('page', $page);
            return $this->fetch('subject');
        }
    }

    public function add() {
        if(Request::instance()->post()) {
            $param = Request::instance()->param();
            $options = $param['option'];
            for($i = 0; $i < count($options); $i++) {
                $options[$i] = chr($i+65).'.'.htmlspecialchars($options[$i]);
            }
            $param['analytical'] = htmlspecialchars($param['analytical']);
            $param['content'] = htmlspecialchars($param['question_content']);
            $param['answer'] = implode('-=~=-=~=-', $options);
            $ans = $param['right_answer'];
            $anscode = 0;
            foreach( $ans as $key=>$ans) {
                $anscode += pow(2,ord($ans)-65);
            }
            $param['correct_answer'] = $anscode;
            if (model('Exercises')->strict(false)->insert($param)) {
                $this->success('添加成功！');
            }
        } else {
            $subjects = model('Subject')->subjects();
            $this->assign('subjects',$subjects);
            return $this->fetch('add');
        }

    }

    public function delete() {
        $id = Request::instance()->get('id');
        $res = model('Exercises')->where('exercises_id='.$id)->delete();
        if ($res) {
            $this->success('删除成功');
        }
        $this->error('删除失败');
    }


    public function doedit()
    {
        if(Request::instance()->post()) {
            $param = Request::instance()->param();
            $options = $param['option'];
            for($i = 0; $i < count($options); $i++) {
                $options[$i] = chr($i+65).'.'.htmlspecialchars($options[$i]);
            }
            $param['analytical'] = htmlspecialchars($param['analytical']);
            $param['content'] = htmlspecialchars($param['question_content']);
            $param['answer'] = implode('-=~=-=~=-', $options);
            $ans = $param['right_answer'];
            $anscode = 0;
            foreach( $ans as $key=>$ans) {
                $anscode += pow(2,ord($ans)-65);
            }
            $param['correct_answer'] = $anscode;

            $res = model('Exercises')->strict(false)->where('exercises_id',$param['sid'])->update($param);
            if ($res) {
                $this->success('修改成功');
            }
            $this->error('修改失败');
        }
    }

    public function edit() {
        if(Request::instance()->post()) {
            $this->upload();
            exit;
        } else {
            $sid = Request::instance()->param('sid');
            $qid = Request::instance()->param('qid');
            $question = model('Exercises')->where('exercises_id='.$qid)->find();
            $this->assign('question',$question);
            $question['answer'] = explode('-=~=-=~=-',$question['answer']);
            $answercount = count($question['answer']);
            $answers = [];
            for($j=0;$j<$answercount;$j++) {
                if (intval(pow(2,$j) & $question['correct_answer']) > 0) {
                    $answers[] = chr($j+65);
                }
            }
            $subjects = model('Subject')->subjects();
            $this->assign('subjects',$subjects);
            $this->assign('answers',$answers);
            $this->assign('question',$question);
            return $this->fetch();
        }

    }

    public function upload() {
        $config = [
            'maxSize'      => 2048000,
            'exts'         => ['jpg','gif','png','jpeg','mp3'],
            'autoSub'      => false,
            // 'subName'      => ['date', 'Y-m-d'],
            'savePath'     => 'attachement/',
            // 'saveExt'      => 'jpg',
            'hash'         => true,
            'callback'     => true,
            'driver'       => 'Local',
        ];
        $uploader = new Upload($config);
        $info = $uploader->upload();
        if(!$info){
            echo $uploader->getError();
        }else{
            // header("Content-type:image/jpeg");
            $url = '';
            if ($_SERVER['SERVER_NAME'] != '127.0.0.1') {
                $url = 'http://'.$_SERVER['HTTP_HOST'].'/Uploads/attachement/'.$info['upload']['savename'];
            } else {
                $url = 'http://'.$_SERVER['HTTP_HOST'].'/dqExam/Uploads/attachement/'.$info['upload']['savename'];
            }
            $filename = $info['upload']['savename'];
            $param = array(
                "uploaded"=>1,
                "fileName"=>$filename,
                "url"=>$url
            );
            if (isset($_GET['CKEditorFuncNum'])) {
                echo "<script type='text/javascript'> window.parent.CKEDITOR.tools.callFunction('".$_GET['CKEditorFuncNum']."', '".$url."', '')</script>";
            } else {
                echo json_encode($param);
            }
        }
    }


}

?>
