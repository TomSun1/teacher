<?php
namespace app\admin\validate;
use think\Validate;

class Subject extends Validate {
    protected $rule = [
        'subject_name'  =>   'require|max:255',
        'subject_pid'   =>   'require|number',
        'subject_description' =>   'max:255',
    ];

    protected $message = [
        'subject_name.require'   =>  '科目名称不能为空',
        'subject_name.max'       =>  '科目名称过长',
        'subject_pid.require'    =>  '上级科目不能为空',
        'subject_pid.number'     =>  '非法的参数',
        'subject_description.max'  =>   '描述文字过长',
    ];

    protected $sence = [
        'add'   => ['subject_name','subject_pid', 'subject_description'],
        'edit'  => ['subject_name','subject_pid', 'subject_description']
    ];

}
?>