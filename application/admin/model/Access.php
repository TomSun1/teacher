<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Access extends Model {
    protected $table = 'dq_auth_group_access';
    public function admin() {
        return $this->belongsTo('Admin','user_id');
    }

    
}