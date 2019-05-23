<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/Library/WebServer/Documents/teacher/application/admin/view/login/index.html";i:1558618670;}*/ ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="__ROOT__/public/static/css/bootstrap-clearmin.min.css">
    <link rel="stylesheet" type="text/css" href="__ROOT__/public/static/css/roboto.css">
    <link rel="stylesheet" type="text/css" href="__ROOT__/public/static/css/font-awesome.min.css">
    <title>扫码看老师-登录</title>
    <style></style>
  </head>
  <body class="cm-login">

    <div class="text-center" style="padding:90px 0 30px 0;background:#fff;border-bottom:1px solid #ddd">
      <img src="__ROOT__/public/static/img/logo-big.svg" width="300" height="45">
    </div>
    
    <div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">
      <form method="post" action="index.html">
	<div class="col-xs-12">
          <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
	      <input type="text" name="username" class="form-control" placeholder="用户名">
	    </div>
          </div>
          <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
	      <input type="password" name="password" class="form-control" placeholder="密码">
	    </div>
          </div>
        </div>
      <div class="col-xs-6">
          <button type="submit" class="btn btn-block btn-primary">登录</button>
        </div>
      </form>
    </div>
  </body>
</html>
