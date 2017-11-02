<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Exercises extends Model {
    public function insertommonQuestion($args) {
    	$root_chapter_id = $args['chapter_id'];
    	$root_question_type = $args['question_type'];
    	$root_question_content = htmlspecialchars($args['question_content']);
    	$root_analytical = htmlspecialchars($args['analytical']);
    	$root_effective = $args['effective'];
    	$subQuestions = $args['rootQuestion'];
    	$subject_id = $args['subject_id'];
		$sub_question_type = $args['subtype'];

        $sql = "INSERT INTO `TYKW_EXERCISES` (EXERCISES_PID,TOP_ID,CHAPTER_ID,QUESTION_ID,QUESTION_TYPE,CORRECT_ANSWER,ANSWER,ANALYTICAL,CONTENT,EFFECTIVE,QUESTION_CODE,VERSION)VALUES(-1,-1,$root_chapter_id,$root_question_type,$root_question_type,'','','".$root_analytical."','".$root_question_content."',$root_effective,0,1)";
		$db = Db::connect('sqlite:./public/database/'.$subject_id.'/TyData.db');
		// $res = $db2->execute($sql);
		// $id = $db2->getLastInsID();
    	foreach ($subQuestions as $index => $question) {
    		$sub_content = $question['content'];
    		$sub_option = $question['option'];
    		$sub_right_answer = $question['right_answer'];
    		$sub_analytical = $question['analytical'];
			$sub_correct_answer = 0;
	        for($i=0;$i<count($sub_option);$i++) {
	            $sub_option[$i] = chr($i+65).'.'.htmlspecialchars($sub_option[$i],ENT_QUOTES);
	        }
            foreach ($sub_right_answer as $key => $value) {
                $sub_correct_answer += pow(2,ord($value)-65);
            }
	        $ANSWER = implode('-=~=-=~=-', $sub_option);
	        echo $sub_correct_answer;

    	}
    	// echo '<pre>';
    	// var_dump($db);
    	// echo '</pre>';
    	exit;
    }
}

?>
