<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Auth extends Model {
    public function groups() {
        return Db::name('auth_group') -> select();
    }

    public function rules() {
        return Db::name('auth_rule') -> select();
    }
}