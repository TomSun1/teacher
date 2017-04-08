<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
class Chapter extends Base {
    public function sublist() {
        $subjects = model('Subject')->subjects();
        
    }
}
