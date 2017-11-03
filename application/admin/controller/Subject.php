<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use think\Db;

class Subject extends Base {
    public function index() {
        $subjects = model('Product')->subjects();
        if ($subjects) {
            $lists = $subjects->toArray();
		    $page = $subjects->render();
            $trees = sortOut($lists['data'],-1,0,'&nbsp;&nbsp;&nbsp;');
		    $this->assign('lists',$trees);
		    $this->assign('page', $page);
        }
        return $this->fetch();
    }

    public function add() {
        $subjects = Db::name('Product')->select();
        $trees = sortOut($subjects,-1);
        if ($trees) {
            $this->assign('subs',$trees);
        }

        if (Request::instance()->param()) {

            $param = Request::instance()->param();
            $param['product_type'] = $param['product_pid'] == -1 ? 0 : 1;
            if (model('Product')->add($param)) {
                $this->success('添加成功！');
            }
            $this->error('添加失败！');
        }
        return $this->fetch();
    }

    public function delete() {
        $id = Request::instance() -> param('id');
        if ($id) {
            $res = model('Subject') -> deleteSubject($id);
            $status = $res ? 1 : 0;
            $msg = $res ? '删除成功' : '删除失败';
            return json_encode(array(
                'status'=> $status,
                'msg'   => $msg
            ));
        }
        return json_encode(array(
            'status' => 0,
            'msg'    => '非法参数'
        ));
    }

    public function edit() {
        $subjects = Db::name('Subject')->select();
        $trees = sortOut($subjects,-1);
        if ($trees) {
            $this->assign('subs',$trees);
        }
        $id = Request::instance() -> param('id');
        if ($id) {
            $subject = model('Subject') -> subject($id);
            $this->assign('subject',$subject);
        }
        return $this->fetch();
    }

    public function update() {
        $param = Request::instance()->param();
        if ($param) {
            if (model('Subject')->updateSub($param)) {
                $this->success('修改成功');
            }
            $this->error('修改失败');
        }
    }

}


?>
