<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Auth extends Model {
    public function groups() {
        return Db::name('auth_group') -> select();
    }

    public function group($gid) {
        return Db::name('auth_group') -> where('id='.$gid) -> find();
    }

    public function addGroup($param) {
        return Db::name('auth_group') -> insert($param);
    }

    public function updateGroup($param) {
        return Db::name('auth_group') -> update($param);
    }

    public function deleteGroup($gid) {
        return Db::name('auth_group') -> where('id='.$gid) -> delete();
    }

    public function rules() {
        return Db::name('auth_rule') -> select();
    }

    public function rule($rid) {
        return Db::name('auth_rule') -> where('id='.$rid) -> find();
    }

    public function addRule($param) {
        return Db::name('auth_rule') -> insert($param);
    }

    public function updateRule($param) {
        return Db::name('auth_rule') -> update($param);
    }

    public function assigment() {
        $group = Db::name('auth_group') -> select();
        
        foreach ($group as $k => $v) {
            $rule = $v['rules'];
            if ($rule) {
                $r_list = explode(',',$rule);
                $group[$k]['rules'] = $r_list;
                // $rule_list = array();
                // foreach ($r_list as $key => $value) {
                //     $r = Db::name('auth_rule') -> where('id='.$value) -> find();
                //     $rule_list[$value] = $r;
                // }
                // $group[$k]['rules'] = $rule_list;
            }
        }
        return $group;
    }

}
?>