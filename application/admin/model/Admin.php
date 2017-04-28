<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Admin extends Model {
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
        $this->alias('a')
        ->join('dq_auth_group_access c','a.user_id=c.uid')
        ->join('dq_auth_group g','c.group_id=g.id')
        ->field('a.user_id,a.user_name,a.phone_number,a.email,a.area,a.campus,a.jobtitle,a.isValid,c.group_id,g.title')
        ->where('a.user_id='.$id)
        ->find();
    }


}