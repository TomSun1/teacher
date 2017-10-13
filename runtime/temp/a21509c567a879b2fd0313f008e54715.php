<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/Library/WebServer/Documents/dqExam/application/admin/view/login/signin.html";i:1507863360;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>题库管理系统 | 登录</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="__ROOT__/public/static/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="__ROOT__/public/static/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="__ROOT__/public/static/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="__ROOT__/public/static/js/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="__ROOT__/public/static/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="form-box" id="login-box">
            <div class="header bg-blue">大桥题库管理系统</div>
            <form action="<?php echo url('admin/login/signin'); ?>" method="POST">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="account" class="form-control" placeholder="请输入手机号码或邮箱"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="请输入密码"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> 记住密码
                    </div>
                </div>
                <div class="footer bg-gray">                                                               
                    <button type="submit" class="btn bg-blue btn-block">登录</button>  
                    <p><a href="#">忘记密码</a></p>
                </div>
            </form>
        </div>
        <!-- jQuery 2.0.2 -->
        <script src="__ROOT__/public/static/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="__ROOT__/public/static/js/bootstrap.min.js" type="text/javascript"></script>        
    </body>
</html>