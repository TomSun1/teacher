<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use think\Db;

class Chapter extends Base {
    public function index() {
        $this->assign('action',Request::instance()->action());
        if (Request::instance()->param('sid')) {
            //打开sqlite
            $sid = Request::instance()->param('sid');
            $sql = "select * from TYKW_CHAPTER";
            $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
            $chapters = $db2->query($sql);
            $this->assign('sid',$sid);
            $this->assign('chapters',$chapters);
            return $this->fetch('chapters');
        } else {
            $subjects = model('Product')->subjects();
            if ($subjects) {
                $lists = $subjects->toArray();
                $page = $subjects->render();
                $trees = sortOut($lists['data'],-1,0,'&nbsp;&nbsp;&nbsp;');
                $this->assign('lists',$trees);
                $this->assign('page', $page);
            }
            return $this->fetch('subject');
        }

    }

	public function add() {
        $this->assign('action',Request::instance()->action());
		if (Request::instance()->param('sid')) {
            //打开sqlite
            $sid = Request::instance()->param('sid');
            $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
            if (Request::instance()->post('action')) {
                $chapter_name = Request::instance()->post('chapter_name');
                $chapter_pid = Request::instance()->post('chapter_pid');
                $sql = "INSERT INTO `TYKW_CHAPTER` (CHAPTER_PID,CHAPTER_NAME,CHAPTER_NO,CHILD_VALUE,CHAPTER_TAKE)VALUES(".$chapter_pid.",'".$chapter_name."',0,0,1)";
                if ($db2->execute($sql)) {
                    $this->success('添加成功');
                } else {
                    $this->error('添加失败');
                }
            } else {
                $sql = "SELECT * FROM `TYKW_CHAPTER`";
                $chapters = $db2->query($sql);
                $this->assign('chapters',$chapters);
                $this->assign('sid',$sid);
                return $this->fetch();
            }
        }
        $subjects = model('Product')->subjects();
        if ($subjects) {
            $lists = $subjects->toArray();
		    $page = $subjects->render();
            $trees = sortOut($lists['data'],-1,0,'&nbsp;&nbsp;&nbsp;');
		    $this->assign('lists',$trees);
		    $this->assign('page', $page);
        }
        return $this->fetch('subject');

	}

    public function edit() {
        $sid = Request::instance()->param('sid');
        $cid = Request::instance()->param('cid');
        $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');

        if (Request::instance()->post()){
            $chapter_name = Request::instance()->param('chapter_name');
            $sql = "UPDATE `TYKW_CHAPTER` SET CHAPTER_NAME = '".$chapter_name."' WHERE CHAPTER_ID = ".$cid;
            if ($db2->execute($sql)) {
                $url = \think\Url::build('admin/chapter/index','sid='.$sid);
                $this->success('修改成功！',$url);
            } else {
                $this->error('修改失败！');
            }
        } else {
            $sql = "SELECT * FROM `TYKW_CHAPTER` where CHAPTER_ID = ".$cid;
            $chapter = $db2->query($sql);
            $this->assign('sid',$sid);
            $this->assign('chapter',$chapter[0]);
            return $this->fetch();
        }

    }


}
