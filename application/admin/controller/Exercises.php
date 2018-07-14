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
        $this->assign('action',Request::instance()->action());
        if (Request::instance()->param('sid')) {
            //打开sqlite
            $sid = Request::instance()->param('sid');
            $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
            if (Request::instance()->param('cid')) {
                $cid = Request::instance()->param('cid');
                //查找该章节下的题
                $sql = "SELECT * FROM `TYKW_EXERCISES` WHERE CHAPTER_ID = ".$cid;
                $exercises = $db2->query($sql);
                $this->assign('sid',$sid);
                $this->assign('exercises',$exercises);
                return $this->fetch('exercises');
            } else {
                $sql = "select * from TYKW_CHAPTER";
                $chapters = $db2->query($sql);
                $this->assign('sid',$sid);
                $this->assign('chapters',$chapters);
                return $this->fetch('chapters');
            }
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
        $subjects = model('Subject')->subjects();

        return $this->fetch('add');
    }

    public function delete() {
        $sid = Request::instance()->param('sid');
        $id = Request::instance()->param('id');
        $sql = "DELETE FROM `TYKW_EXERCISES` WHERE EXERCISES_ID=".$id;
        $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
        return $db2->query($sql);
    }

    public function edit() {
        $sid = Request::instance()->param('sid');
        $qid = Request::instance()->param('qid');
        $sql = "SELECT * FROM `TYKW_EXERCISES` e LEFT JOIN `TYKW_CHAPTER` c ON e.CHAPTER_ID = c.CHAPTER_ID WHERE e.EXERCISES_ID = ".$qid;
        $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
        $question = $db2->query($sql);
        $options = explode('-=~=-=~=-',$question[0]['ANSWER']);
        $question[0]['answer'] = $options;
        $this->assign('question',$question[0]);
        $this->assign('sid',$sid);
        return $this->fetch();
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

    public function type() {
        $this->assign('action',Request::instance()->action());
        if (Request::instance()->param('sid')) {
            $sid = Request::instance()->param('sid');
            $sql = "SELECT * FROM `TYKW_QUESTION`";
            $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
            $types = $db2->query($sql);
            $this->assign('sid',$sid);
            $this->assign('types',$types);
            return $this->fetch();
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
}

?>
