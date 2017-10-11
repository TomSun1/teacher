<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use think\Db;
use org\Upload;
class Exercises extends Base {

    public function index() {

        // if (Request::instance()->param('sid')) {
        //     //打开sqlite
        //     $sid = Request::instance()->param('sid');
        //     $sql = "select * from TYKW_CHAPTER";
        //     $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
        //     $chapters = $db2->query($sql);
        //     $this->assign('chapters',$chapters);
        //     return $this->fetch('chapters');
        // }
        return $this->fetch();
    }

    public function add() {
        if (Request::instance()->param('sid')) {
            $sid = Request::instance()->param('sid');
            $sql = "select * FROM TYKW_CHAPTER";
            $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
            $chapters = $db2->query($sql);
            $this->assign('sid',$sid);
            $this->assign('chapters',$chapters);
            return $this->fetch();
        } else if (Request::instance()->post()){
            //插入习题
            $EXERCISES_PID = -1;
            $question_type = Request::instance()->post('question_type');
            $CORRECT_ANSWER = 0;
            switch ($question_type) {
                case '1':
                    $CORRECT_ANSWER = pow(2,ord(Request::instance()->post('right_answer'))-65);
                    break;
                case '2':
                    $right_answers = Request::instance()->param()['right_answer'];
                    foreach ($right_answers as $key => $value) {
                        $CORRECT_ANSWER += pow(2,ord($value)-65);
                    }
                    break;
                default:
                    break;
            }
            $option = Request::instance()->param()['option'];
            $sid = Request::instance()->param('subject_id');
            $analytical = Request::instance()->post('analytical');
            $question_content = Request::instance()->post('question_content');
            $chapter_id = Request::instance()->post('chapter_id');
            $ANSWER = implode('-=~=-=~=-', $option);
            $EFFECTIVE = Request::instance()->post('effective');
            $sql = "INSERT INTO `TYKW_EXERCISES` (EXERCISES_PID,TOP_ID,CHAPTER_ID,QUESTION_ID,QUESTION_TYPE,CORRECT_ANSWER,ANSWER,ANALYTICAL,CONTENT,EFFECTIVE,QUESTION_CODE,VERSION)VALUES(".$EXERCISES_PID.",-1,".$chapter_id.",".$question_type.",".$question_type.",".$CORRECT_ANSWER.",'".$ANSWER."','".$analytical."','".$question_content."',".$EFFECTIVE.",0,1)";
            $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
            $res = $db2->execute($sql);
            $id = $db2->getLastInsID();
            //插入习题入完成再更新TOP_ID
            $sql = "UPDATE `TYKW_EXERCISES` SET TOP_ID = EXERCISES_ID WHERE EXERCISES_ID = ".$id;
            if($db2->execute($sql)) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        }
        $this->assign('action',Request::instance()->action());
        $subjects = model('Product')->subjects();
        $lists = $subjects->toArray();
        $page = $subjects->render();
        $trees = sortOut($lists['data'],-1,0,'&nbsp;&nbsp;&nbsp;');
        $this->assign('lists',$trees);
        $this->assign('page', $page);
        return $this->fetch('subject');
    }

    public function upload() {
        $config = [
            'maxSize'      => 2048000,
            'exts'         => ['jpg','gif','png','jpeg'],
            'autoSub'      => true,
            'subName'      => ['date', 'Y-m-d'],
            'savePath'     => 'attachement/',
            'saveExt'      => 'jpg',
            'hash'         => true,
            'callback'     => true,
            'driver'       => 'Local',
        ];
        $uploader = new Upload($config);
        $info = $uploader->upload();
        if(!$info){
            echo $uploader->getError();
        }else{
            header("Content-type:image/jpeg");
            echo '../../../Uploads/'.$info['wangEditorH5File']['savepath'].$info['wangEditorH5File']['savename'];
            exit;
        }

    }
}

?>
