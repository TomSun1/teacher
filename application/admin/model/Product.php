<?php
namespace app\admin\model;
use think\Model;

class Product extends Model {
    public function subjects() {
          return $this->paginate(20);
    }
}

?>
