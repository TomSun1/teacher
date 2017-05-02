<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Admin extends Model {
    
    public function access() {
        return $this->hasOne('Access','uid');
    }

    public function login($param) {
        return $this ->alias('a')
        ->join('dq_auth_group_access c','a.user_id=c.uid')
        ->join('dq_auth_group g','c.group_id=g.id')
        -> where('a.user_name="'.$param['account'].'" AND a.password="'.md5($param['password']).'"')
        -> whereOr('a.phone_number="'.$param['account'].'" AND a.password="'.md5($param['password']).'"')
        -> whereOr('a.email="'.$param['account'].'" AND a.password="'.md5($param['password']).'"')
        ->field('a.user_id,a.user_name,a.phone_number,a.email,a.area,a.campus,a.jobtitle,a.isValid,c.group_id,g.title')
        -> find();
    }

    public function addAdmin($param) {
        $user = new Admin($param);
        $user->allowField(true)->save();
        return $user->user_id;
    }

    public function admins() {
        return $this->alias('a')
        ->join('dq_auth_group_access c','a.user_id=c.uid')
        ->join('dq_auth_group g','c.group_id=g.id')
        ->field('a.user_id,a.user_name,a.phone_number,a.email,a.area,a.campus,a.jobtitle,a.isValid,c.group_id,g.title')
        ->select();
    }

    public function admin($id) {
        return $this->alias('a')
        ->join('dq_auth_group_access c','a.user_id=c.uid')
        ->join('dq_auth_group g','c.group_id=g.id')
        ->field('a.user_id,a.user_name,a.phone_number,a.email,a.area,a.campus,a.jobtitle,a.isValid,c.group_id,g.title')
        ->where('a.user_id='.$id)
        ->find();
    }

    public function updateAdmin($param) {
        $user = Admin::get($param['id']);
        $user->access->group_id = $param['group_id'];
        return $user->access->save() || $user->allowField(true)->save($param);
    }

    public function deleteAdmin($id) {
        return Admin::destroy($id) && Db::name('auth_group_access')->where('uid='.$id)->delete();
    }

}