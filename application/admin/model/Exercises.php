<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Exercises extends Model {
    public function insertommonQuestion($args) {
    	$root_chapter_id = $args['chapter_id'];
    	$root_question_type = $args['question_type'];
    	$root_question_content = htmlspecialchars($args['question_content'],ENT_QUOTES);
    	$root_analytical = htmlspecialchars($args['analytical'],ENT_QUOTES);
    	$root_effective = $args['effective'];
    	$subQuestions = $args['rootQuestion'];
    	$subject_id = $args['subject_id'];
		// $sub_question_type = $args['subtype'];

        $sql = "INSERT INTO `TYKW_EXERCISES` (EXERCISES_PID,TOP_ID,CHAPTER_ID,QUESTION_ID,QUESTION_TYPE,CORRECT_ANSWER,ANSWER,ANALYTICAL,CONTENT,EFFECTIVE,QUESTION_CODE,VERSION)VALUES(-1,-1,".$root_chapter_id.",".$root_question_type.",".$root_question_type.",'','','".$root_analytical."','".$root_question_content."',$root_effective,0,1)";
		$db = Db::connect('sqlite:./public/database/'.$subject_id.'/TyData.db');
		$res = $db->execute($sql);
		$root_id = $db->getLastInsID();
        $sql = "UPDATE `TYKW_EXERCISES` SET TOP_ID = EXERCISES_ID WHERE EXERCISES_ID = ".$root_id;
        $db->execute($sql);
    	foreach ($subQuestions as $index => $question) {
    		$sub_content = htmlspecialchars($question['content'],ENT_QUOTES);
    		$sub_option = $question['option'];
    		$sub_right_answer = $question['right_answer'];
    		$sub_analytical = htmlspecialchars($question['analytical'],ENT_QUOTES);
			$sub_correct_answer = 0;
	        for($i=0;$i<count($sub_option);$i++) {
	            $sub_option[$i] = chr($i+65).'.'.htmlspecialchars($sub_option[$i],ENT_QUOTES);
	        }
            foreach ($sub_right_answer as $key => $value) {
                $sub_correct_answer += pow(2,ord($value)-65);
            }
	        $ANSWER = implode('-=~=-=~=-', $sub_option);
            $sub_question_type = $root_question_type == 3 ? 1 : 2;
            $sql = "INSERT INTO `TYKW_EXERCISES` (EXERCISES_PID,TOP_ID,CHAPTER_ID,QUESTION_ID,QUESTION_TYPE,CORRECT_ANSWER,ANSWER,ANALYTICAL,CONTENT,EFFECTIVE,QUESTION_CODE,VERSION)VALUES(".$root_id.",-1,".$root_chapter_id.",".$sub_question_type.",".$sub_question_type.",".$sub_correct_answer.",'".$ANSWER."','".$sub_analytical."','".$sub_content."',$root_effective,0,1)";
            $res = $db->execute($sql);
            $sub_id = $db->getLastInsID();
            $sql = "UPDATE `TYKW_EXERCISES` SET TOP_ID = EXERCISES_ID WHERE EXERCISES_ID = ".$sub_id;
            $db->execute($sql);
    	}

    }
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
