<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use think\Db;
class Auth extends Base {
    public function group() {
        $groups = model('Auth') -> groups();
        $this -> assign('groups',$groups);
        return $this -> fetch();
    }

    public function addGroup() {
        if (Request::instance() -> post()) {
            $res = model('Auth') -> addGroup(Request::instance() -> post());
            return $res ? $this->success('添加成功') : $this->error('添加失败');
        }
        return $this -> fetch();
    }

    public function editGroup() {
        if (Request::instance() -> post()) {
            $res = model('Auth') -> updateGroup(Request::instance() -> post());
            return $res ? $this->success('修改成功') : $this->error('修改失败');
        }
        $id = Request::instance() -> param('id');
        $group = model('Auth') -> group($id);
        $this->assign('group',$group);
        return $this -> fetch();
    }
    
    public function auth() {
        $rules = model('Auth') -> rules();
        $this -> assign('rules',$rules);
        return $this -> fetch();
    }

    public function addRules() {
        if (Request::instance() -> post()) {
            $res = model('Auth') -> addRule(Request::instance() -> post());
            return $res ? $this->success('添加成功') : $this->error('添加失败');
        }
        return $this -> fetch();
    }

    public function editRules() {
        if (Request::instance() -> post()) {
            $res = model('Auth') -> updateRule(Request::instance() -> post());
            return $res ? $this->success('修改成功') : $this->error('修改失败');
        } else {
            $rid = Request::instance() -> param('id');
            $rule = model('Auth') -> rule($rid);
            $this -> assign('rule',$rule);
            return $this -> fetch();
        }
    }


    public function deleteRules() {
        $param = Request::instance() -> post();
        $map['id'] = ['IN', implode(',',$param['id'])];
        $res = Db::name('auth_rule') -> where($map) -> delete();
        echo $res;exit;
        $status = $res;
        $msg = $res == 0  ? "删除失败！" : "删除成功！";
        echo json_encode(
            array(
                'status'=>$status,
                'msg'=>$msg
            )
        );
    }

    public function deleteRule() {
        if (Request::instance() -> param('id')) {
            $res = model('Auth') -> deleteRule(Request::instance() -> param('id'));
            $status = $res ? 0 : 1;
			$msg = $res  ? "删除失败！" : "删除成功！";
			echo json_encode(
				array(
					'status'=>$status,
					'msg'=>$msg
				)
			);
        }
    }
    

    public function deleteGroup() {
        if (Request::instance() -> param('id')) {
            $res = model('Auth') -> deleteGroup(Request::instance() -> param('id'));
            $status = $res ? 0 : 1;
			$msg = $res  ? "删除失败！" : "删除成功！";
			echo json_encode(
				array(
					'status'=>$status,
					'msg'=>$msg
				)
			);
        }
    }
    
    public function assigment() {
        if (Request::instance() -> post()) {
            $param = Request::instance() -> post();
            $rules = $param['rules'];
            $result = 0;
            $groups = Db::name('auth_group') -> field('id') -> select();
            foreach ($groups as $k => $v) {
                $rule = isset($rules[$v['id']]) ? $rules[$v['id']] : array();
                $res = model('Auth') -> updateAccess($v['id'],implode(',',$rule));
                $result |= $res;
            }
            return $result ? $this->success('修改成功') : $this->error('修改失败');
        }
        $auths = model('Auth') -> assigment();
        $rules = Db::name('auth_rule') -> select();
        $this -> assign('group',$auths);
        $this -> assign('rules',$rules);
        return $this -> fetch();
    }
}
?>