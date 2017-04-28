<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    'admin/signin'      => 'admin/login/signin',
    'admin/dashboard'   => 'admin/index/index',
    'admin/user/edit'   => 'admin/admin/edit',
    'admin/auths'       => 'admin/auth/auth',
    'admin/auth-assign' => 'admin/auth/assigment',
    'admin/subjects'    => 'admin/subject/index',
    'admin/users'       => 'admin/admin/index',
    'admin/user/add'    => 'admin/admin/add'
];
