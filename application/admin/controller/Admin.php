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
        if (Request::instance() -> post()) {
            $param = Request::instance() -> post();
            $res = model('Admin') -> updateAdmin($param);
            return $res ? $this->success('修改成功') : $this->error('修改失败');
        }
        $id = Request::instance() -> param('id');
        $group = Db::name('auth_group') -> select();
        $this -> assign('group',$group);
        $info = model('Admin') -> admin($id);
        $this -> assign('info',$info);
        return $this -> fetch();
    }

    public function info() {
        if (Request::instance() -> param('id')) {
            $info = model('Admin') -> admin(Request::instance() -> param('id'));
            echo json_encode($info);
        }
    }

    public function delete() {
        if (Request::instance() -> param('id')) {
            $res = model('Admin') -> deleteAdmin(Request::instance() -> param('id'));
            return $res ? $this->success('删除成功') : $this->error('删除失败');
        }
    }
}
?>