<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use think\Db;

class Admin extends Base {
    public function index() {
        $admins = model('Admin') -> admins();
        $this -> assign('admins',$admins);
        return $this -> fetch();
    }

    public function add() {
        if (Request::instance() -> post()) {
            $param = Request::instance() -> post();
            $param['password'] = md5($param['password']);
            $id = model('Admin') -> addAdmin($param);
            $access = array('uid'=>$id,'group_id'=>$param['group_id']);
            $res = Db::name('auth_group_access') -> insert($access);
            return $res ? $this->success('添加成功') : $this->error('添加失败');
        }
        $group = Db::name('auth_group') -> select();
        $this -> assign('group',$group);
        return $this -> fetch();
    }

    public function edit() {
        Request::instance() -> param('id');
        $group = Db::name('auth_group') -> select();
        $this -> assign('group',$group);
        return $this -> fetch();
    }


}