<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function getTree($list, $parent_id,$level = 0) {
    $tree = array();//保存找到的分类的数组
//遍历所有分类，通过parent_id判断，哪些是我们正在查找的 
    foreach($list as $k=>$v) {
    //判断当前所遍历的分类$row, 是否是当前需要查找的子分类 
        if($v['subject_pid'] == $parent_id) {
            $v['level'] = $level;
            $v['nodes'] = getTree($list, $v['subject_id'],$level+1);
            $tree[] = $v;
            unset($list[$k]);
        }
    }
    return $tree;
}

/**
 * 无限极分类
 * @param [type] $cate [栏目结果集]
 * @param integer $pid [父id]
 * @param integer $level [栏目级别]
 * @param string $html [样式字符串]
 * @return [array] [返回数组]
 */
function sortOut($cate,$pid=-1,$level=0,$html='--'){
    $tree = array();
    foreach($cate as $v){
        if($v['subject_pid'] == $pid){
            $v['level'] = $level + 1;
            $v['html'] = str_repeat($html, $level);
            $tree[] = $v;
            $tree = array_merge($tree, sortOut($cate,$v['subject_id'],$level+1,$html));
        }
    }
    return $tree;
}