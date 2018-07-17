<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;

class Index extends Base {
    public function index() {
        $qcount = model('Exercises')->count();
        $scount = model('Subject')->count();
        $this->assign('qcount',$qcount);
        $this->assign('scount',$scount);
        return $this->fetch();
    }


}

?>