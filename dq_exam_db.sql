-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-03 05:52:53
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dq_exam_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `dq_admin`
--

CREATE TABLE `dq_admin` (
  `user_id` int(64) NOT NULL COMMENT '用户id',
  `user_name` varchar(255) NOT NULL COMMENT '用户名',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `phone_number` varchar(255) NOT NULL COMMENT '手机号码',
  `email` varchar(255) DEFAULT NULL,
  `area` varchar(255) NOT NULL COMMENT '地区',
  `campus` varchar(255) NOT NULL COMMENT '校区',
  `jobtitle` varchar(255) NOT NULL COMMENT '职位',
  `isValid` smallint(4) NOT NULL DEFAULT '1',
  `create_time` int(255) NOT NULL,
  `update_time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台用户表';

--
-- 转存表中的数据 `dq_admin`
--

INSERT INTO `dq_admin` (`user_id`, `user_name`, `password`, `phone_number`, `email`, `area`, `campus`, `jobtitle`, `isValid`, `create_time`, `update_time`) VALUES
(3, 'sug3rs', 'e10adc3949ba59abbe56e057f20f883e', '15504307570', '278124813@qq.com', '吉林', '朝阳校区', '总部', 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `dq_auth_group`
--

CREATE TABLE `dq_auth_group` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `dq_auth_group_access` (
  `uid` mediumint(8) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
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

CREATE TABLE `dq_auth_rule` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `dq_chapter`
--

CREATE TABLE `dq_chapter` (
  `chapter_id` bigint(20) UNSIGNED NOT NULL COMMENT '章节id',
  `chapter_pid` bigint(20) UNSIGNED NOT NULL COMMENT '章节父id',
  `chapter_name` varchar(255) NOT NULL COMMENT '章节名称',
  `chapter_no` bigint(20) NOT NULL COMMENT '章节排序',
  `chapter_take` tinyint(4) NOT NULL DEFAULT '1' COMMENT '预留',
  `child_value` int(128) NOT NULL COMMENT '小科目id',
  `subject_id` bigint(20) NOT NULL COMMENT '科目id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='章节表';

-- --------------------------------------------------------

--
-- 表的结构 `dq_exam_config`
--

CREATE TABLE `dq_exam_config` (
  `exam_id` int(128) NOT NULL COMMENT '配置id',
  `child_value` int(128) NOT NULL COMMENT '小科目',
  `exam_type_id` int(128) NOT NULL COMMENT '试卷类型id',
  `subject_id` bigint(20) NOT NULL COMMENT '科目id',
  `exam_number` int(32) NOT NULL COMMENT '抽题数量',
  `exam_score` int(32) NOT NULL COMMENT '总分数',
  `question_id` int(11) NOT NULL COMMENT '题型id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='试卷配置表';

-- --------------------------------------------------------

--
-- 表的结构 `dq_exam_type`
--

CREATE TABLE `dq_exam_type` (
  `exam_type_id` int(11) NOT NULL,
  `exam_type_name` varchar(255) NOT NULL COMMENT '试卷类型名称',
  `subject_id` bigint(20) NOT NULL COMMENT '科目id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='考试类型表';

-- --------------------------------------------------------

--
-- 表的结构 `dq_exercises`
--

CREATE TABLE `dq_exercises` (
  `exercises_id` bigint(20) NOT NULL COMMENT '习题id',
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
  `effective` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否生效'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='习题表';

-- --------------------------------------------------------

--
-- 表的结构 `dq_product`
--

CREATE TABLE `dq_product` (
  `product_order` int(2) DEFAULT NULL,
  `product_icon` varchar(10) DEFAULT NULL,
  `product_hidden` varchar(5) DEFAULT NULL,
  `product_description` varchar(15) DEFAULT NULL,
  `software_type_value` int(3) DEFAULT NULL,
  `product_id` int(3) NOT NULL,
  `product_type` int(1) DEFAULT NULL,
  `product_version` int(1) DEFAULT NULL,
  `product_name` varchar(15) DEFAULT NULL,
  `product_pid` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `dq_product`
--

INSERT INTO `dq_product` (`product_order`, `product_icon`, `product_hidden`, `product_description`, `software_type_value`, `product_id`, `product_type`, `product_version`, `product_name`, `product_pid`) VALUES
(1, '', 'true', '微软Windows系统基础', 12, 166, 0, 0, '微软Windows系统基础', -1),
(2, '', 'true', '微软Office办公软件', 12, 167, 0, 0, '微软Office办公软件', -1),
(4, '', 'true', '金山Office办公软件', 12, 168, 0, 0, '金山Office办公软件', -1),
(3, '', 'true', '其他相关科目', 12, 169, 0, 0, '其他相关科目', -1),
(0, '', 'false', '2015版执业药师(西药)资格', 12, 194, 1, 0, '2015版执业药师(西药)资格', 192),
(0, '', 'true', '教师资格考试', 12, 198, 0, 0, '教师资格考试', -1),
(0, '', 'true', '护士资格考试', 2, 203, 0, 0, '护士资格考试', -1),
(0, '', 'true', '', 2, 205, 1, 0, '护士实践能力', 203),
(0, '', 'true', '', 16, 206, 0, 0, '外科系列', -1),
(1, '', 'true', '', 16, 211, 1, 0, '神经外科', 206),
(2, '', 'true', '', 16, 212, 1, 0, '烧伤外科', 206),
(3, '', 'true', '', 16, 213, 1, 0, '整形外科', 206),
(4, '', 'true', '', 16, 214, 1, 0, '骨外科', 206),
(5, '', 'true', '', 16, 215, 1, 0, '泌尿外科', 206),
(6, '', 'true', '', 16, 216, 1, 0, '小儿外科', 206),
(7, '', 'true', '', 16, 217, 1, 0, '普通外科', 206),
(0, '', 'true', '', 16, 218, 0, 0, '内科系列', -1),
(1, '', 'true', '', 16, 219, 1, 0, '传染病学', 218),
(2, '', 'true', '', 16, 220, 1, 0, '呼吸内科', 218),
(3, '', 'true', '', 16, 221, 1, 0, '结核病学', 218),
(4, '', 'true', '', 16, 222, 1, 0, '内分泌学', 218),
(5, '', 'true', '', 16, 223, 1, 0, '神经内科', 218),
(6, '', 'true', '', 16, 224, 1, 0, '肾内科', 218),
(7, '', 'true', '', 16, 225, 1, 0, '消化内科', 218),
(0, '', 'true', '', 16, 226, 1, 0, '心血管内科学', 218),
(0, '', 'true', '', 16, 227, 0, 0, '中医系列', -1),
(1, '', 'true', '', 16, 228, 1, 0, '中西医结合内科', 227),
(2, '', 'true', '', 16, 229, 1, 0, '中医耳鼻喉科', 227),
(3, '', 'true', '', 16, 230, 1, 0, '中医妇科', 227),
(4, '', 'true', '', 16, 231, 1, 0, '中医肛肠', 227),
(5, '', 'true', '', 16, 232, 1, 0, '中医皮肤与性病学', 227),
(6, '', 'true', '', 16, 233, 1, 0, '中医推拿', 227),
(7, '', 'true', '', 16, 234, 1, 0, '中医外科', 227),
(8, '', 'true', '', 16, 235, 1, 0, '中医眼科', 227),
(9, '', 'true', '', 16, 236, 1, 0, '中医针灸', 227),
(10, '', 'true', '', 16, 237, 1, 0, '中医骨伤科', 227),
(0, '', 'true', '', 16, 238, 0, 0, '五官科系列', -1),
(0, '', 'true', '', 16, 239, 1, 0, '口腔颌面外科', 238),
(0, '', 'true', '', 16, 240, 1, 0, '口腔内科', 238),
(0, '', 'true', '', 16, 241, 1, 0, '口腔修复', 238),
(0, '', 'true', '', 16, 242, 1, 0, '口腔医学', 238),
(0, '', 'true', '', 16, 243, 1, 0, '口腔正畸', 238),
(0, '', 'true', '', 16, 244, 1, 0, '眼科', 238),
(0, '', 'true', '', 16, 245, 0, 0, '其他', -1),
(0, '', 'true', '', 16, 246, 1, 0, '病理学', 245),
(0, '', 'true', '', 16, 247, 1, 0, '急诊医学', 245),
(0, '', 'true', '', 16, 248, 1, 0, '精神病学', 245),
(0, '', 'true', '', 16, 249, 1, 0, '老年医学', 245),
(0, '', 'true', '', 16, 250, 1, 0, '麻醉学', 245),
(0, '', 'true', '', 16, 251, 1, 0, '皮肤与性病学', 245),
(0, '', 'true', '', 16, 252, 1, 0, '全科医学', 245),
(0, '', 'true', '', 16, 253, 1, 0, '肿瘤学', 245),
(0, '', 'true', '', 16, 254, 1, 0, '重症医学', 245),
(0, '', 'true', '', 16, 255, 0, 0, '检验系列', -1),
(0, '', 'true', '', 16, 256, 1, 0, '理化检验技术', 255),
(0, '', 'true', '', 16, 257, 1, 0, '临床医学检验临床化学', 255),
(0, '', 'true', '', 16, 258, 1, 0, '临床医学检验临床化学技术', 255),
(0, '', 'true', '', 16, 259, 1, 0, '临床医学检验临床基础检验', 255),
(0, '', 'true', '', 16, 260, 1, 0, '临床医学检验临床基础检验技术', 255),
(0, '', 'true', '', 16, 261, 1, 0, '临床医学检验临床血液', 255),
(0, '', 'true', '', 16, 262, 1, 0, '临床医学检验临床血液技术', 255),
(0, '', 'true', '', 16, 263, 1, 0, '内科学', 218),
(0, '', 'true', '', 16, 264, 1, 0, '儿内科', 218),
(0, '', 'true', '', 16, 265, 1, 0, '血液病学', 218),
(0, '', 'true', '', 16, 266, 1, 0, '临床医学检验', 255),
(0, '', 'true', '', 16, 267, 1, 0, '临床医学检验技术', 255),
(0, '', 'true', '', 16, 268, 1, 0, '临床医学检验临床免疫', 255),
(0, '', 'true', '', 16, 269, 1, 0, '临床医学检验临床免疫技术', 255),
(0, '', 'true', '', 16, 270, 1, 0, '临床医学检验临床微生物', 255),
(0, '', 'true', '', 16, 271, 1, 0, '临床医学检验临床微生物技术', 255),
(0, '', 'true', '', 16, 272, 1, 0, '放射医学', 245),
(0, '', 'true', '', 16, 273, 1, 0, '中西医结合外科', 227),
(0, '', 'true', '', 16, 274, 1, 0, '中医儿科', 227),
(0, '', 'true', '', 16, 275, 1, 0, '中医内科', 227),
(0, '', 'true', '', 16, 276, 1, 0, '中医全科', 227),
(0, '', 'true', '', 16, 277, 1, 0, '耳鼻咽喉科', 238),
(0, '', 'true', '', 16, 278, 1, 0, '胸心外科', 206),
(0, '', 'true', '', 16, 279, 0, 0, '护理系列', -1),
(0, '', 'true', '', 16, 280, 1, 0, '儿科护理', 279),
(0, '', 'true', '', 16, 281, 1, 0, '妇产科护理', 279),
(0, '', 'true', '', 16, 282, 1, 0, '护理学', 279),
(0, '', 'true', '', 16, 283, 1, 0, '急救护理', 279),
(0, '', 'true', '', 16, 285, 1, 0, '外科护理', 279),
(0, '', 'true', '', 16, 286, 1, 0, '中医护理', 279),
(0, '', 'true', '', 16, 287, 0, 0, '预防系列', -1),
(0, '', 'true', '', 16, 288, 1, 0, '环境卫生', 287),
(0, '', 'true', '', 16, 289, 1, 0, '疾病控制', 287),
(0, '', 'true', '', 16, 290, 1, 0, '学校卫生与儿少卫生', 287),
(0, '', 'true', '', 16, 291, 1, 0, '营养与食品卫生', 287),
(0, '', 'true', '', 16, 292, 1, 0, '预防疾控微生物检验技术', 287),
(0, '', 'true', '', 16, 293, 1, 0, '职业卫生', 287),
(0, '', 'true', '', 16, 294, 0, 0, '医技系列', -1),
(0, '', 'true', '', 16, 295, 1, 0, '超声医学与技术', 294),
(0, '', 'true', '', 16, 296, 1, 0, '核医学与技术', 294),
(0, '', 'true', '', 16, 297, 1, 0, '康复医学与技术', 294),
(0, '', 'true', '', 16, 298, 1, 0, '输血技术', 294),
(0, '', 'true', '', 16, 299, 1, 0, '心电学技术', 294),
(0, '', 'true', '', 16, 300, 0, 0, '妇产科系列', -1),
(0, '', 'true', '', 16, 301, 0, 0, '药学系列', -1),
(0, '', 'true', '', 16, 302, 1, 0, '临床药学', 301),
(0, '', 'true', '', 16, 303, 1, 0, '医院药学', 301),
(0, '', 'true', '', 16, 304, 1, 0, '中药学', 301),
(0, '', 'true', '', 16, 305, 1, 0, '妇产科', 300),
(0, '', 'true', '', 16, 306, 1, 0, '妇女保健', 300),
(0, '', 'true', '', 16, 307, 1, 0, '计划生育', 300),
(0, '', 'true', '', 32, 308, 0, 0, '内科系列', -1),
(0, '', 'true', '', 32, 310, 1, 0, '内科', 308),
(0, '', 'true', '', 32, 311, 1, 0, '内分泌', 308),
(0, '', 'true', '', 32, 312, 1, 0, '肾内科', 308),
(0, '', 'true', '', 32, 313, 1, 0, '神经内科', 308),
(0, '', 'true', '', 32, 314, 1, 0, '消化内科', 308),
(0, '', 'true', '', 32, 315, 1, 0, '呼吸内科', 308),
(0, '', 'true', '', 32, 316, 1, 0, '心血管内科', 308),
(0, '', 'true', '', 32, 317, 1, 0, '血液病', 308),
(0, '', 'true', '', 32, 318, 1, 0, '结核病', 308),
(0, '', 'true', '', 32, 319, 1, 0, '传染病学', 308),
(0, '', 'true', '', 32, 320, 1, 0, '职业病', 308),
(0, '', 'true', '', 32, 321, 1, 0, '风湿与临床免疫学', 308),
(0, '', 'true', '', 32, 322, 0, 0, '外科系列', -1),
(0, '', 'true', '', 32, 323, 1, 0, '普通外科', 322),
(0, '', 'true', '', 32, 324, 1, 0, '胸心外科', 322),
(0, '', 'true', '', 32, 325, 1, 0, '神经外科', 322),
(0, '', 'true', '', 32, 326, 1, 0, '烧伤外科', 322),
(0, '', 'true', '', 32, 327, 1, 0, '小儿外科', 322),
(0, '', 'true', '', 32, 328, 1, 0, '泌尿外科', 322),
(0, '', 'true', '', 32, 329, 1, 0, '整形外科', 322),
(0, '', 'true', '', 32, 330, 1, 0, '骨外科学', 322),
(0, '', 'true', '', 32, 331, 0, 0, '五官科系列', -1),
(0, '', 'true', '', 32, 332, 1, 0, '耳鼻咽喉科', 331),
(0, '', 'true', '', 32, 333, 1, 0, '口腔颌面外科', 331),
(0, '', 'true', '', 32, 334, 1, 0, '口腔内科', 331),
(0, '', 'true', '', 32, 335, 1, 0, '口腔修复', 331),
(0, '', 'true', '', 32, 336, 1, 0, '口腔医学', 331),
(0, '', 'true', '', 32, 337, 1, 0, '口腔正畸', 331),
(0, '', 'true', '', 32, 338, 1, 0, '眼科', 331),
(0, '', 'true', '', 32, 339, 0, 0, '妇产科系列', -1),
(0, '', 'true', '', 32, 340, 1, 0, '妇产科', 339),
(0, '', 'true', '', 32, 341, 1, 0, '妇幼保健', 339),
(0, '', 'true', '', 32, 342, 1, 0, '计划生育', 339),
(0, '', 'true', '', 32, 343, 0, 0, '预防系列', -1),
(0, '', 'true', '', 32, 344, 1, 0, '预防医学', 343),
(0, '', 'true', '', 32, 345, 1, 0, '公共卫生', 343),
(0, '', 'true', '', 32, 346, 1, 0, '疾病控制', 343),
(0, '', 'true', '', 32, 347, 1, 0, '健康教育', 343),
(0, '', 'true', '', 32, 348, 1, 0, '职业卫生', 343),
(0, '', 'true', '', 64, 349, 0, 0, '药学职称', -1),
(0, '', 'true', '', 64, 350, 1, 0, '药剂士', 349),
(0, '', 'true', '', 64, 351, 1, 0, '药剂师', 349),
(0, '', 'true', '', 64, 352, 1, 0, '主管药师', 349),
(0, '', 'true', '', 64, 353, 1, 0, '中药士', 349),
(0, '', 'true', '', 64, 354, 1, 0, '中药师', 349),
(0, '', 'true', '', 64, 355, 1, 0, '主管中药师', 349),
(0, '', 'true', '', 8, 356, 0, 0, '医学中级（护士考试）', -1),
(0, '', 'true', '', 8, 357, 1, 0, '执业护士', 356),
(0, '', 'true', '', 8, 358, 1, 0, '主管护师', 356),
(0, '', 'true', '', 8, 359, 1, 0, '护理学(护师)', 356),
(0, '', 'true', '', 8, 360, 1, 0, '儿科护理', 356),
(0, '', 'true', '', 8, 361, 1, 0, '妇产科护理', 356),
(0, '', 'true', '', 8, 362, 1, 0, '社区护理', 356),
(0, '', 'true', '', 8, 363, 1, 0, '内科护理', 356),
(0, '', 'true', '', 8, 364, 1, 0, '外科护理', 356),
(0, '', 'true', '', 32, 365, 0, 0, '中医系列', -1),
(0, '', 'true', '', 32, 366, 1, 0, '中医全科', 365),
(0, '', 'true', '', 32, 367, 1, 0, '推拿按摩', 365),
(0, '', 'true', '', 32, 368, 1, 0, '中西医结合骨伤科', 365),
(0, '', 'true', '', 32, 369, 1, 0, '中医儿科', 365),
(0, '', 'true', '', 32, 370, 1, 0, '中医耳鼻喉科', 365),
(0, '', 'true', '', 32, 371, 1, 0, '中医妇科', 365),
(0, '', 'true', '', 32, 372, 1, 0, '中医肛肠科', 365),
(0, '', 'true', '', 32, 373, 1, 0, '中医内科', 365),
(0, '', 'true', '', 32, 374, 1, 0, '中医外科', 365),
(0, '', 'true', '', 32, 375, 1, 0, '中医眼科', 365),
(0, '', 'true', '', 32, 376, 1, 0, '中医针灸', 365),
(0, '', 'true', '', 32, 377, 1, 0, '中西医结合内科', 365),
(0, '', 'true', '', 32, 379, 1, 0, '中医皮肤与性病学', 365),
(0, '', 'true', '', 32, 380, 1, 0, '中西医结合外科', 365),
(0, '', 'true', '', 32, 381, 1, 0, '中医骨伤科', 365),
(0, '', 'true', '', 32, 382, 0, 0, '其他', -1),
(0, '', 'true', '', 32, 383, 1, 0, '病理学', 382),
(0, '', 'true', '', 32, 384, 1, 0, '超声波医学', 382),
(0, '', 'true', '', 32, 385, 1, 0, '儿科', 382),
(0, '', 'true', '', 32, 386, 1, 0, '放射医学', 382),
(0, '', 'true', '', 32, 387, 1, 0, '核医学', 382),
(0, '', 'true', '', 32, 388, 1, 0, '精神病学', 382),
(0, '', 'true', '', 32, 389, 1, 0, '康复医学', 382),
(0, '', 'true', '', 32, 390, 1, 0, '临床医学检验学', 382),
(0, '', 'true', '', 32, 391, 1, 0, '麻醉', 382),
(0, '', 'true', '', 32, 392, 1, 0, '皮肤与性病学', 382),
(0, '', 'true', '', 32, 393, 1, 0, '全科医学', 382),
(0, '', 'true', '', 32, 394, 1, 0, '疼痛学', 382),
(0, '', 'true', '', 32, 395, 1, 0, '营养学', 382),
(0, '', 'true', '', 32, 396, 1, 0, '肿瘤学', 382),
(0, '', 'true', '', 32, 397, 1, 0, '重症医学', 382),
(0, '', 'true', '', 128, 398, 0, 0, '医技考试', -1),
(0, '', 'true', '', 128, 399, 1, 0, '超声波医学与技术', 398),
(0, '', 'true', '', 128, 400, 1, 0, '病案信息技术(师)', 398),
(0, '', 'true', '', 128, 401, 1, 0, '病案信息技术(士)', 398),
(0, '', 'true', '', 128, 402, 1, 0, '放射医学技术(师)', 398),
(0, '', 'true', '', 128, 403, 1, 0, '放射医学技术(士)', 398),
(0, '', 'true', '', 128, 404, 1, 0, '康复医学治疗技术(士)', 398),
(0, '', 'true', '', 128, 405, 1, 0, '口腔医学技术(士)', 398),
(0, '', 'true', '', 128, 406, 1, 0, '临床医学检验技术(师)', 398),
(0, '', 'true', '', 128, 407, 1, 0, '临床医学检验技术(士)', 398),
(0, '', 'true', '', 128, 408, 1, 0, '病案信息技术', 398),
(0, '', 'true', '', 128, 409, 1, 0, '病理学技术', 398),
(0, '', 'true', '', 128, 410, 1, 0, '放射医学技术', 398),
(0, '', 'true', '', 128, 411, 1, 0, '核医学技术', 398),
(0, '', 'true', '', 128, 412, 1, 0, '康复医学治疗技术', 398),
(0, '', 'true', '', 128, 413, 1, 0, '口腔医学技术', 398),
(0, '', 'true', '', 128, 414, 1, 0, '理化检验技术', 398),
(0, '', 'true', '', 128, 415, 1, 0, '临床医学检验技术', 398),
(0, '', 'true', '', 128, 416, 1, 0, '输血技术', 398),
(0, '', 'true', '', 128, 417, 1, 0, '微生物检验技术', 398),
(0, '', 'true', '', 128, 418, 1, 0, '消毒技术', 398),
(0, '', 'true', '', 128, 419, 1, 0, '心电学技术', 398),
(0, '', 'true', '', 128, 420, 1, 0, '心理治疗', 398),
(0, '', 'true', '', 128, 421, 1, 0, '肿瘤放射治疗技术', 398),
(0, '', 'true', '财会', 4, 422, 0, 0, '财会', -1),
(0, '', 'true', '初级会计资格', 4, 423, 1, 0, '初级会计资格', 422),
(0, '', 'false', '主治医生', 32, 425, 0, 0, '主治医生', -1),
(0, '', 'true', '中级会计资格', 4, 426, 1, 0, '中级会计资格', 422),
(1, '', 'true', '一级建造师', 256, 501, 0, 0, '一级建造师', -1),
(1, '', 'true', '港口与航道工程', 256, 502, 1, 0, '港口与航道工程', 501),
(1, '', 'true', '公路工程', 256, 503, 1, 0, '公路工程', 501),
(1, '', 'true', '机电工程', 256, 504, 1, 0, '机电工程', 501),
(1, '', 'true', '建设工程法规及相关知识', 256, 505, 1, 0, '建设工程法规及相关知识', 501),
(1, '', 'true', '', 256, 506, 1, 0, '建设工程经济', 501),
(1, '', 'true', '', 256, 507, 1, 0, '建设工程项目管理', 501),
(1, '', 'true', '建筑工程实务', 256, 508, 1, 0, '建筑工程实务', 501),
(1, '', 'true', '矿业工程', 256, 509, 1, 0, '矿业工程', 501),
(1, '', 'true', '民航机场工程', 256, 510, 1, 0, '民航机场工程', 501),
(1, '', 'true', '市政公用工程', 256, 511, 1, 0, '市政公用工程', 501),
(1, '', 'true', '水利水电工程管理与实务', 256, 512, 1, 0, '水利水电工程管理与实务', 501),
(1, '', 'true', '铁路工程管理与实务', 256, 513, 1, 0, '铁路工程管理与实务', 501),
(1, '', 'true', '通信与广电工程', 256, 514, 1, 0, '通信与广电工程', 501),
(2, '', 'true', '', 256, 515, 0, 0, '二级建造师', -1),
(1, '', 'true', '', 256, 516, 1, 0, '公路工程管理与实务', 515),
(2, '', 'true', '', 256, 517, 1, 0, '建设工程法规及相关知识', 515),
(3, '', 'true', '建设工程施工管理', 256, 518, 1, 0, '建设工程施工管理', 515),
(4, '', 'true', '建筑工程管理与实务', 256, 519, 1, 0, '建筑工程管理与实务', 515),
(1, '', 'true', '计算机四级', 512, 520, 0, 0, '计算机四级', -1),
(1, '', 'true', '网络工程师', 512, 521, 1, 0, '网络工程师', 520),
(2, '', 'true', '数据库工程师', 512, 522, 1, 0, '数据库工程师', 520),
(3, '', 'true', '软件测试工程师', 512, 523, 1, 0, '软件测试工程师', 520),
(4, '', 'true', '嵌入式系统开发工程师', 512, 524, 1, 0, '嵌入式系统开发工程师', 520),
(5, '', 'true', '计算机四级操作系统', 512, 525, 1, 0, '操作系统', 520),
(1, '', 'true', '银行从业考试', 100, 526, 0, 0, '银行从业考试', -1),
(1, '', 'true', '', 100, 527, 1, 0, '法律法规与综合能力', 526),
(2, '', 'true', '', 100, 528, 1, 0, '个人理财', 526),
(3, '', 'true', '', 100, 529, 1, 0, '风险管理', 526),
(1, '', 'true', '职称英语', 3, 540, 0, 1, '职称英语', -1),
(1, '', 'true', '职称英语', 3, 541, 1, 1, '卫生A级', 540),
(0, '', 'true', '', 16, 2841, 1, 0, '内科护理', 279),
(NULL, NULL, NULL, '', 3, 2857, 1, NULL, '卫生B级', 540);

-- --------------------------------------------------------

--
-- 表的结构 `dq_question_type`
--

CREATE TABLE `dq_question_type` (
  `question_id` int(64) UNSIGNED NOT NULL COMMENT '题型id',
  `question_content` text NOT NULL COMMENT '题型说明',
  `question_name` varchar(255) NOT NULL COMMENT '题型名称',
  `question_type` int(128) NOT NULL COMMENT '题型值'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='题型表';

-- --------------------------------------------------------

--
-- 表的结构 `dq_subject`
--

CREATE TABLE `dq_subject` (
  `subject_id` int(128) UNSIGNED NOT NULL COMMENT '科目id',
  `subject_pid` int(128) NOT NULL COMMENT '父科目id',
  `subject_name` varchar(255) NOT NULL COMMENT '科目名称',
  `subject_icon` varchar(255) NOT NULL COMMENT '科目图标',
  `subject_type` tinyint(16) NOT NULL COMMENT '科目类型 0 顶级分类 1科目',
  `subject_order` int(128) NOT NULL COMMENT '科目排序',
  `subject_version` tinyint(4) NOT NULL COMMENT '科目版本',
  `software_type_value` int(64) NOT NULL COMMENT '软件类型值',
  `subject_hidden` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  `subject_description` text NOT NULL COMMENT '科目描述'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='科目表';

--
-- 转存表中的数据 `dq_subject`
--

INSERT INTO `dq_subject` (`subject_id`, `subject_pid`, `subject_name`, `subject_icon`, `subject_type`, `subject_order`, `subject_version`, `software_type_value`, `subject_hidden`, `subject_description`) VALUES
(4, 5, '英语第一册', '', 1, 0, 0, 2, 0, '测试'),
(5, -1, '英语教材', '', 0, 0, 0, 0, 0, ''),
(6, 4, '英语第一册上', '', 1, 0, 0, 2, 0, ''),
(7, -1, '数学', '', 0, 0, 0, 2, 0, ''),
(8, 7, '小学数学第一册', '', 1, 0, 0, 2, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dq_admin`
--
ALTER TABLE `dq_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `dq_auth_group`
--
ALTER TABLE `dq_auth_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dq_auth_group_access`
--
ALTER TABLE `dq_auth_group_access`
  ADD UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `dq_auth_rule`
--
ALTER TABLE `dq_auth_rule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `dq_chapter`
--
ALTER TABLE `dq_chapter`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `dq_exam_config`
--
ALTER TABLE `dq_exam_config`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `dq_exam_type`
--
ALTER TABLE `dq_exam_type`
  ADD PRIMARY KEY (`exam_type_id`);

--
-- Indexes for table `dq_exercises`
--
ALTER TABLE `dq_exercises`
  ADD PRIMARY KEY (`exercises_id`),
  ADD UNIQUE KEY `exercises_id` (`exercises_id`);

--
-- Indexes for table `dq_product`
--
ALTER TABLE `dq_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `dq_question_type`
--
ALTER TABLE `dq_question_type`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `dq_subject`
--
ALTER TABLE `dq_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `dq_admin`
--
ALTER TABLE `dq_admin`
  MODIFY `user_id` int(64) NOT NULL AUTO_INCREMENT COMMENT '用户id', AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `dq_auth_group`
--
ALTER TABLE `dq_auth_group`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用表AUTO_INCREMENT `dq_auth_rule`
--
ALTER TABLE `dq_auth_rule`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- 使用表AUTO_INCREMENT `dq_chapter`
--
ALTER TABLE `dq_chapter`
  MODIFY `chapter_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '章节id';

--
-- 使用表AUTO_INCREMENT `dq_exam_config`
--
ALTER TABLE `dq_exam_config`
  MODIFY `exam_id` int(128) NOT NULL AUTO_INCREMENT COMMENT '配置id';

--
-- 使用表AUTO_INCREMENT `dq_exam_type`
--
ALTER TABLE `dq_exam_type`
  MODIFY `exam_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `dq_exercises`
--
ALTER TABLE `dq_exercises`
  MODIFY `exercises_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '习题id';

--
-- 使用表AUTO_INCREMENT `dq_product`
--
ALTER TABLE `dq_product`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2858;

--
-- 使用表AUTO_INCREMENT `dq_question_type`
--
ALTER TABLE `dq_question_type`
  MODIFY `question_id` int(64) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '题型id';

--
-- 使用表AUTO_INCREMENT `dq_subject`
--
ALTER TABLE `dq_subject`
  MODIFY `subject_id` int(128) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '科目id', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
