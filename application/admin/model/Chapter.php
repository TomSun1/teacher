<?php
namespace app\admin\model;
use think\Model;
class Chapter extends Model {
    public function chapters($sid) {
        return $this->where('subject_id='.$sid)->select();
    }

    public function add($param) {
        $chapter = new Chapter($param);
        return $chapter->allowField(true)->save();
    }

    public function deleteChapter($cid) {

    }


}