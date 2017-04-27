-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-27 09:52:54
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dq_exam`
--

-- --------------------------------------------------------

--
-- 表的结构 `dq_admin`
--

CREATE TABLE IF NOT EXISTS `dq_admin` (
  `user_id` int(64) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_name` varchar(255) NOT NULL COMMENT '用户名',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `phone_number` varchar(255) NOT NULL COMMENT '手机号码',
  `email` varchar(255) DEFAULT NULL,
  `area` varchar(255) NOT NULL COMMENT '地区',
  `campus` varchar(255) NOT NULL COMMENT '校区',
  `jobtitle` varchar(255) NOT NULL COMMENT '职位',
  `isValid` smallint(4) NOT NULL DEFAULT '1',
  `create_time` int(255) NOT NULL,
  `update_time` int(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台用户表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `dq_admin`
--

INSERT INTO `dq_admin` (`user_id`, `user_name`, `password`, `phone_number`, `email`, `area`, `campus`, `jobtitle`, `isValid`, `create_time`, `update_time`) VALUES
(3, 'sug3rs', 'e10adc3949ba59abbe56e057f20f883e', '15504307570', '278124813@qq.com', '吉林', '朝阳校区', '总部', 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `dq_auth_group`
--

CREATE TABLE IF NOT EXISTS `dq_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `dq_auth_group`
--

INSERT INTO `dq_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(28, '编辑', 1, '2,7,8,15,16'),
(27, '超级管理员', 1, '2,3,4,6,7,8,9,13,15,16,40'),
(29, '教师', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `dq_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `dq_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `dq_auth_group_access`
--

INSERT INTO `dq_auth_group_access` (`uid`, `group_id`) VALUES
(3, 27);

-- --------------------------------------------------------

--
-- 表的结构 `dq_auth_rule`
--

CREATE TABLE IF NOT EXISTS `dq_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

-- --------------------------------------------------------

--
-- 表的结构 `dq_chapter`
--

CREATE TABLE IF NOT EXISTS `dq_chapter` (
  `chapter_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '章节id',
  `chapter_pid` bigint(20) unsigned NOT NULL COMMENT '章节父id',
  `chapter_name` varchar(255) NOT NULL COMMENT '章节名称',
  `chapter_no` bigint(20) NOT NULL COMMENT '章节排序',
  `chapter_take` tinyint(4) NOT NULL DEFAULT '1' COMMENT '预留',
  `child_value` int(128) NOT NULL COMMENT '小科目id',
  `subject_id` bigint(20) NOT NULL COMMENT '科目id',
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='章节表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dq_exam_config`
--

CREATE TABLE IF NOT EXISTS `dq_exam_config` (
  `exam_id` int(128) NOT NULL AUTO_INCREMENT COMMENT '配置id',
  `child_value` int(128) NOT NULL COMMENT '小科目',
  `exam_type_id` int(128) NOT NULL COMMENT '试卷类型id',
  `subject_id` bigint(20) NOT NULL COMMENT '科目id',
  `exam_number` int(32) NOT NULL COMMENT '抽题数量',
  `exam_score` int(32) NOT NULL COMMENT '总分数',
  `question_id` int(11) NOT NULL COMMENT '题型id',
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='试卷配置表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dq_exam_type`
--

CREATE TABLE IF NOT EXISTS `dq_exam_type` (
  `exam_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_type_name` varchar(255) NOT NULL COMMENT '试卷类型名称',
  `subject_id` bigint(20) NOT NULL COMMENT '科目id',
  PRIMARY KEY (`exam_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='考试类型表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dq_exercises`
--

CREATE TABLE IF NOT EXISTS `dq_exercises` (
  `exercises_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '习题id',
  `exercises_pid` bigint(20) NOT NULL COMMENT '父题目id',
  `top_id` bigint(20) NOT NULL COMMENT '预留字段',
  `chapter_id` bigint(20) NOT NULL COMMENT '章节id',
  `question_id` int(64) NOT NULL COMMENT '题型说明id',
  `question_type` int(64) NOT NULL COMMENT '题型',
  `question_code` int(11) NOT NULL COMMENT '预留字段',
  `version` int(32) NOT NULL COMMENT '题库版本',
  `correct_answer` int(128) NOT NULL COMMENT '正确答案值',
  `answer` text NOT NULL COMMENT '选项',
  `analytical` text NOT NULL COMMENT '解析',
  `content` text NOT NULL COMMENT '题干',
  `correct_text` text NOT NULL COMMENT '答对的提示文字',
  `wrong_text` text NOT NULL COMMENT '答错的提示文字',
  `subject_id` int(11) NOT NULL COMMENT '科目id',
  `exercises_advice` text NOT NULL COMMENT '学习建议文字',
  `effective` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否生效',
  PRIMARY KEY (`exercises_id`),
  UNIQUE KEY `exercises_id` (`exercises_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='习题表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dq_question_type`
--

CREATE TABLE IF NOT EXISTS `dq_question_type` (
  `question_id` int(64) unsigned NOT NULL AUTO_INCREMENT COMMENT '题型id',
  `question_content` text NOT NULL COMMENT '题型说明',
  `question_name` varchar(255) NOT NULL COMMENT '题型名称',
  `question_type` int(128) NOT NULL COMMENT '题型值',
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='题型表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dq_subject`
--

CREATE TABLE IF NOT EXISTS `dq_subject` (
  `subject_id` int(128) unsigned NOT NULL AUTO_INCREMENT COMMENT '科目id',
  `subject_pid` int(128) NOT NULL COMMENT '父科目id',
  `subject_name` varchar(255) NOT NULL COMMENT '科目名称',
  `subject_icon` varchar(255) NOT NULL COMMENT '科目图标',
  `subject_type` tinyint(16) NOT NULL COMMENT '科目类型 0 顶级分类 1科目',
  `subject_order` int(128) NOT NULL COMMENT '科目排序',
  `subject_version` tinyint(4) NOT NULL COMMENT '科目版本',
  `software_type_value` int(64) NOT NULL COMMENT '软件类型值',
  `subject_hidden` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  `subject_description` text NOT NULL COMMENT '科目描述',
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='科目表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `dq_subject`
--

INSERT INTO `dq_subject` (`subject_id`, `subject_pid`, `subject_name`, `subject_icon`, `subject_type`, `subject_order`, `subject_version`, `software_type_value`, `subject_hidden`, `subject_description`) VALUES
(4, 5, '英语第一册', '', 1, 0, 0, 2, 0, '测试'),
(5, -1, '英语教材', '', 0, 0, 0, 0, 0, ''),
(6, 4, '英语第一册上', '', 1, 0, 0, 2, 0, ''),
(7, -1, '数学', '', 0, 0, 0, 2, 0, ''),
(8, 7, '小学数学第一册', '', 1, 0, 0, 2, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
