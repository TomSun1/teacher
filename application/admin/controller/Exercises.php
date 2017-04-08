<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;

class Exercises extends Base {

    public function add() {
        if (Request::instance()->param()) {
            $param = Request::instance()->param();
            
        }
        return $this->fetch();
    }
}

?>