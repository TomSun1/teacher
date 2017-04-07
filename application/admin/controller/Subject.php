<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;

class Subject extends Base {
    public function index() {
        $subjects = model('Subject')->subjects();
        if ($subjects) {
            $lists = $subjects->toArray();
		    $page = $subjects->render();
		    $this->assign('lists', $lists['data']);
		    $this->assign('page', $page);
        }
        return $this->fetch();
    }

    public function add() {
        if (Request::instance()->param()) {
            $param = Request::instance()->param();
            $validate = validate('Subject');
             if(!$validate->scene('add')->check($param)) {
                $this->error($validate->getError());
            }
            $param['software_type_value'] = 2;
            $param['subject_type'] = $param['subject_pid'] == -1 ? 0 : 1;
            if (model('Subject')->add($param)) {
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
        $id = Request::instance() -> get('id');
        if ($id) {
            $subject = model('Subject') -> subject($id);
            $this->assign('subject',$subject);
        }
        return $this->fetch();
    }

}


?>