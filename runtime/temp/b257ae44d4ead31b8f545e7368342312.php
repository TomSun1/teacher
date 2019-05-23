<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/Library/WebServer/Documents/teacher/application/admin/view/index/index.html";i:1558618911;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="__ROOT__/public/static/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="__ROOT__/public/static/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="__ROOT__/public/static/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="__ROOT__/public/static/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="__ROOT__/public/static/css/font-awesome.min.css">
        <title>扫码看老师</title>
    </head>
    <body class="cm-no-transition cm-1-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="cm-flex"><a href="index.html" class="cm-logo"></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                        <ul class="cm-menu-items">
                            <li class="active"><a href="index.html" class="sf-house">首页</a></li>
                            <li><a href="" class="sf-brick">创建账号</a></li>
                            <li class="cm-submenu">
                                <a class="sf-window-layout">教师管理 <span class="caret"></span></a>
                                <ul>
                                    <li><a href="">教师列表</a></li>
                                    <li><a href="">增加教师</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>首页</h1> 
                    <form id="cm-search" action="index.html" method="get">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                <div class="pull-right">
                    <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-notifications-white" data-toggle="dropdown"> <span class="label label-danger">23</span> </button>
                    <div class="popover cm-popover bottom">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading text-overflow">
                                        <i class="fa fa-fw fa-envelope"></i> Nunc volutpat aliquet magna.
                                    </h4>
                                    <p class="list-group-item-text text-overflow">Pellentesque tincidunt mollis scelerisque. Praesent vel blandit quam.</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-envelope"></i> Aliquam orci lectus
                                    </h4>
                                    <p class="list-group-item-text">Donec quis arcu non risus sagittis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-warning"></i> Holy guacamole !
                                    </h4>
                                    <p class="list-group-item-text">Best check yo self, you're not looking too good.</p>
                                </a>
                            </div>
                            <div style="padding:10px"><a class="btn btn-success btn-block" href="#">Show me more...</a></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu">
                        <li class="disabled text-center">
                            <a style="cursor:default;"><strong>John Smith</strong></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a>
                        </li>
                        <li>
                            <a href="login.html"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">欢迎使用！</h2> 
                <p></p>
            </div>

            <footer class="cm-footer"><span class="pull-left"></span><span class="pull-right">&copy; 大桥外语</span></footer>
        </div>
        <script src="__ROOT__/public/static/js/lib/jquery-2.1.3.min.js"></script>
        <script src="__ROOT__/public/static/js/jquery.mousewheel.min.js"></script>
        <script src="__ROOT__/public/static/js/jquery.cookie.min.js"></script>
        <script src="__ROOT__/public/static/js/fastclick.min.js"></script>
        <script src="__ROOT__/public/static/js/bootstrap.min.js"></script>
        <script src="__ROOT__/public/static/js/clearmin.min.js"></script>
        <script src="__ROOT__/public/static/js/demo/home.js"></script>
    </body>
</html>