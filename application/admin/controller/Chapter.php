<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
class Chapter extends Base {
    public function index() {
        if (Request::instance()->get('sid')) {
            return $this->fetch();
        }

        $subjects = model('Subject')->subjects();
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
