<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
class Auth extends Base {
    public function group() {
        $groups = model('Auth') -> groups();
        $this -> assign('groups',$groups);
        return $this -> fetch();
    }

    public function addGroup() {
        return $this -> fetch();
    }
    
    public function auth() {
        $rules = model('Auth') -> rules();
        $this -> assign('rules',$rules);
        return $this -> fetch();
    }

    public function addRules() {
        return $this -> fetch();
    }

}