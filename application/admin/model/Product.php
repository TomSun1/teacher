<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Product extends Model {
    public function subjects() {
          return $this->paginate(20);
    }

    public function add($args) {
        $subject = new Product($args);
        $res = $subject->allowField(true)->save();
        $lastID = Db::name('Product')->getLastInsID();
        $this->createSQLite($lastID);
        return $res;
    }

    //	创建sqlite数据库
    public function createSQLite($subject_id) {

        if(!file_exists('./public/database/'.$subject_id.'/TyData.db')) {

            if(mkdir("./public/database/".$subject_id."/")) {
                fopen('./public/database/'.$subject_id.'/TyData.db','w+');
                $this->createSQLiteTable($subject_id);
            }else{
                die("创建文件夹失败");
            }
        }
    }

    //创建初始化数据表
    public function createSQLiteTable($subject_id) {
        $db = Db::connect('sqlite:./public/database/'.$subject_id.'/TyData.db');
        //创建收藏笔记表
        $sql = "CREATE TABLE `COLLECT_NOTE`(
           EXERCISES_ID  INTEGER NOT NULL PRIMARY KEY,
           CHAPTER_ID    INTEGER NOT NULL,
           NOTE_CONTENT  VARCHAR(4000) NOT NULL,
           QUESTION_TYPE INTEGER NOT NULL,
           COLLECT_TYPE  INTEGER NOT NULL,
           CREATE_TIME   DATETIME NOT NULL);";
        $db->execute($sql);

        //创建错题题库表
        $sql = "CREATE TABLE `EXAM_WRONG`(
           EXERCISES_ID    INTEGER NOT NULL PRIMARY KEY,
           CHAPTER_ID      INTEGER NOT NULL,
           QUESTION_TYPE   INTEGER NOT NULL,
           WRONG_TIMES     INTEGER NOT NULL,
           WRONG_LAST_TIME DATETIME NOT NULL);";
        $db->execute($sql);

        //创建章节配属科目表
        $sql = "CREATE TABLE `TYKW_CHILD_SUBJECT`(
           CHILD_ID    INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
           SUBJECT_ID  INTEGER NOT NULL,
           CHILD_VALUE INTEGER NOT NULL,
           CHILD_NAME  VARCHAR(500) NOT NULL);";
        $db->execute($sql);

        //创建考场类型配置表
        $sql = "CREATE TABLE `TYKW_EXAM_TYPE`(
           EXAM_TYPE_ID     INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
           SUBJECT_ID       INTEGER NOT NULL,
           EXAM_TYPE_NAME   VARCHAR(500) NOT NULL);";
        $db->execute($sql);
        //创建考场抽题配置表(旧样式)
        $sql = "CREATE TABLE `TYKW_EXAM_CONFIG`(
           EXAM_ID       INTEGER NOT NULL PRIMARY KEY,
           SUBJECT_ID    INTEGER NOT NULL,
           EXAM_TYPE_ID  INTEGER NOT NULL,
           CHILD_VALUE   INTEGER NOT NULL,
           CONFIG_ID     INTEGER NOT NULL,
           EXAM_NUMBER   INTEGER NOT NULL,
           EXAM_SCROE    INTEGER NOT NULL);";
        $db->execute($sql);
        //创建习题表
        $sql = "CREATE TABLE `TYKW_EXERCISES`(
           EXERCISES_ID       INTEGER NOT NULL PRIMARY KEY,
           EXERCISES_PID      INTEGER NOT NULL,
           TOP_ID             INTEGER NOT NULL,
           CHAPTER_ID         INTEGER NOT NULL,
           QUESTION_ID        INTEGER NOT NULL,
           QUESTION_TYPE      INTEGER NOT NULL,
           QUESTION_CODE      INTEGER NOT NULL,
           VERSION            INTEGER NOT NULL,
           CORRECT_ANSWER     INTEGER NOT NULL,
           ANSWER             VARCHAR(4000) NOT NULL,
           ANALYTICAL         VARCHAR(4000) NOT NULL,
           CONTENT            VARCHAR(4000) NOT NULL,
           EFFECTIVE          INTEGER NOT NULL);";
        $db->execute($sql);
        // 创建章节表
        $sql = "CREATE TABLE `TYKW_CHAPTER`(
           CHAPTER_ID       INTEGER NOT NULL PRIMARY KEY,
           CHAPTER_PID      INTEGER NOT NULL,
           CHAPTER_NO       INTEGER NOT NULL,
           CHILD_VALUE      INTEGER NOT NULL,
           CHAPTER_TAKE     INTEGER NOT NULL,
           CHAPTER_NAME     VARCHAR(500) NOT NULL);";
        $db->execute($sql);
        // 创建考试指南表
         $sql = "CREATE TABLE `TYKW_GUIDE`(
           GUIDE_ID       INTEGER NOT NULL PRIMARY KEY,
           GUIDE_PID      INTEGER NOT NULL,
           GUIDE_NAME     VARCHAR(500)  NOT NULL,
           GUIDE_CONTENT  VARCHAR(4000) NOT NULL);";
        $db->execute($sql);
    }
}

?>
