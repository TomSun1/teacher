<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use think\auth\Auth;
class Base extends Controller {
    protected function _initialize() {
        if(!Session::get('user_info','admin')){
            $this->redirect('login/signin');
        }
        $info = Session::get('user_info','admin');
        $this->assign('info',$info);
    }

    
}

?>