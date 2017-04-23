<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
class Setting extends Base {
    public function auth() {
        return $this -> fetch();
    }
}
?>