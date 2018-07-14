<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use think\Db;

class Chapter extends Base {
    public function index() {
        $this->assign('action',Request::instance()->action());
        if(Request::instance() -> param('sid')) {
            $chapters = model('Chapter')->chapters(Request::instance() -> param('sid'));
            $this->assign('chapters',$chapters);
            $this->assign('sid',Request::instance() -> param('sid'));
            return $this->fetch('chapters');
        } else {
            $subjects = model('Subject')->subjects();
            if ($subjects) {
                $lists = $subjects->toArray();
                $page = $subjects->render();
                $trees = sortOut($lists['data'],-1,0,'&nbsp;&nbsp;&nbsp;');
                $this->assign('lists',$trees);
                $this->assign('page', $page);
            }
            return $this->fetch('subject');
        }
    }

	public function add() {
        if (Request::instance()->post()){
            $param = Request::instance()->param();
            if (model('Chapter')->add($param)) {
                $this->success('添加成功！');
            }
            $this->error('添加失败！');
        } else {
            $subjects = model('Subject')->subjects();
            $this->assign('subjects', $subjects);
            return $this->fetch();
        }


    }
    
    public function getChapters(){
        $sid = Request::instance()->get('sid');
        $chapters = model('Chapter')->chapters($sid);
        echo json_encode($chapters);
    }

    public function edit() {
        
        if (Request::instance()->post()){
            $param = Request::instance()->param();
            if ($param) {
                $res = model('Chapter')->where('chapter_id',Request::instance()->post('chapter_id'))->update($param);
                if ($res) {
                    $this->success('修改成功');
                }
                $this->error('修改失败');
            }
        } else {
            $sid = Request::instance()->param('sid');
            $cid = Request::instance()->param('cid');
            $subjects = model('Subject')->subjects();
            $this->assign('subjects', $subjects);
            $chapter = model('Chapter')->where('chapter_id='.$cid)->find();
            $this->assign('chapter', $chapter);
            $this->assign('sid', $sid);
            return $this->fetch();
        }

    }

    public function delete(){
        $cid = Request::instance()->get('id');
        $res = model('Chapter')->where('chapter_id='.$cid)->delete();
        if ($res) {
            $this->success('删除成功');
        }
        $this->error('删除失败');
    }


}
