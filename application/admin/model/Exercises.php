<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Exercises extends Model {
    protected $field = true;
    
}
    // case unknow                     //  0未知
    // case radio                      //  1单项选择题
    // case check                      //  2多项选择题
    // case multiRadio                 //  3公用题干题(公用题干单选)
    // case analogExam                 //  4模拟仿真题(包含所有类型)
    // case judge                      //  5判断题
    // case subjective                 //  6主观题
    // case multiCheck                 //  7阅读分析(共用题干多选)
    // case alternative                //  8备选答案
    // case multiAlternative           //  9概括大意与完成句子
    // case fillIn                     //  10填空题
    // case alternativeCheck           //  11填空题
    // case multiSubjective            //  12公用题干主观题

?>
