<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
class Admin extends Base {
    public function index() {
        return $this -> fetch();
    }

    public function add() {
        return $this -> fetch();
    }
}