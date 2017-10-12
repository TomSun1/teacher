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
        // if (Request::instance()->param('sid')) {
        //     //打开sqlite
        //     $sid = Request::instance()->param('sid');
        //     $sql = "select * from TYKW_CHAPTER";
        //     $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
        //     $chapters = $db2->query($sql);
        //     $this->assign('chapters',$chapters);
        //     return $this->fetch('chapters');
        // }
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

	public function add() {
        $this->assign('action',Request::instance()->action());
		if (Request::instance()->param('sid')) {
            //打开sqlite
            $sid = Request::instance()->param('sid');
            $sql = "SELECT * FROM `TYKW_CHAPTER`";
            $db2 = Db::connect('sqlite:./public/database/'.$sid.'/TyData.db');
            $chapters = $db2->query($sql);
            $this->assign('chapters',$chapters);
            return $this->fetch();
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

}
