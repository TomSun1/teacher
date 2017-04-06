<?php
namespace app\admin\model;
use think\Db;
use think\Session;
class Subject extends \think\Model {
    public function subjects() {
          return $this->order('subject_id','desc')
                      ->where('subject_hidden=0')
                      ->paginate(20);
    }

    public function add($param) {
        $subject = new Subject($param);
        return $subject->allowField(true)->save();
    }
}

?>