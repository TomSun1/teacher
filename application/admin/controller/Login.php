<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;

class Login extends Controller {
    public function index() {
        return $this->fetch();
    }

}

?>