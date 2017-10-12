<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use think\Input;

class Login extends Controller {
    public function signIn() {
        if (Request::instance() -> post()) {
            $account  = input('post.account');
            $password = input('post.password');
            $remember = input('post.remember_me');
            $res = model('Admin') -> login(array(
                'account'   => $account,
                'password'  => $password
            ));
            if ($res) {
                Session::set('user_info',$res->toArray(),'admin');
                return $this->success('登录成功','Admin/index/index');
            }
            return $this -> error('登录失败');

        }
        return $this->fetch();
    }

    public function signOut() {

    }
}
