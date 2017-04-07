<?php
namespace app\admin\model;
use think\Model;

class Subject extends Model {
    public function subjects() {
          return $this->order('subject_id','desc')
                      ->where('subject_hidden=0')
                      ->paginate(20);
    }

    public function add($param) {
        $subject = new Subject($param);
        return $subject->allowField(true)->save();
    }

    public function deleteSubject($id) {
        return Subject::destroy($id);
    }

    public function subject($id) {
        return $this->where('subject_id='.$id)->find();
    }
}

?>