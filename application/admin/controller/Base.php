<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
class Base extends Controller {
    public function _initialize() {
        $info = Session::get('user_info','admin');
        // var_dump($info);exit;
        $this->assign('info',$info);
    }
}

?>