<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"/Users/apple/Web/dqExam/application/admin/view/exercises/add.html";i:1510730959;s:58:"/Users/apple/Web/dqExam/application/admin/view/header.html";i:1507863360;s:55:"/Users/apple/Web/dqExam/application/admin/view/nav.html";i:1507863360;s:56:"/Users/apple/Web/dqExam/application/admin/view/menu.html";i:1509690252;s:58:"/Users/apple/Web/dqExam/application/admin/view/footer.html";i:1507863360;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>题库管理系统 | 添加题目</title>
                <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="__ROOT__/public/static/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="__ROOT__/public/static/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="__ROOT__/public/static/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="__ROOT__/public/static/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="__ROOT__/public/static/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="__ROOT__/public/static/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="__ROOT__/public/static/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="__ROOT__/public/static/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="__ROOT__/public/static/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="__ROOT__/public/static/js/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="__ROOT__/public/static/js/respond.min.js"></script>
        <![endif]-->
        <link href="__ROOT__/public/static/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="__ROOT__/public/static/css/wangEditor.min.css">
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
                <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar3.png" class="img-circle" alt="User Image"/>-->
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar2.png" class="img-circle" alt="user image"/>-->
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar.png" class="img-circle" alt="user image"/>-->
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar2.png" class="img-circle" alt="user image"/>-->
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!--<img src="img/avatar.png" class="img-circle" alt="user image"/>-->
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $info['user_name']; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">个人资料</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">退出</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
                        <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                        </div>
                        <div class="pull-left info">
                            <p>你好，<?php echo $info['user_name']; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo url('admin/index/index'); ?>">
                                <i class="fa fa-dashboard"></i> <span>控制台</span>
                            </a>
                        </li>
                        <li class="treeview" id="Admin">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>账号</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo url('admin/admin/index'); ?>"><i class="fa fa-angle-double-right"></i> 全部账号</a></li>
                                <li><a href="<?php echo url('admin/admin/add'); ?>"><i class="fa fa-angle-double-right"></i> 添加账号</a></li>
                            </ul>
                        </li>
                        <li class="treeview" id="Auth">
                            <a href="#">
                                <i class="fa fa-group"></i> <span>权限</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo url('admin/auth/group'); ?>"><i class="fa fa-angle-double-right"></i> 用户组管理</a></li>
                                <li><a href="<?php echo url('admin/auth/auth'); ?>"><i class="fa fa-angle-double-right"></i> 权限管理</a></li>
                                <li><a href="<?php echo url('admin/auth/assigment'); ?>"><i class="fa fa-angle-double-right"></i> 分配权限</a></li>
                            </ul>
                        </li>
                        <li class="treeview" id="Subject">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>科目</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo url('admin/subject/index'); ?>"><i class="fa fa-angle-double-right"></i> 查看科目</a></li>
                                <li><a href="<?php echo url('admin/subject/add'); ?>"><i class="fa fa-angle-double-right"></i> 添加科目</a></li>
                            </ul>
                        </li>
                        <li class="treeview" id="Chapter">
                            <a href="#">
                                <i class="fa fa-list-ul"></i>
                                <span>章节</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo url('admin/chapter/index'); ?>"><i class="fa fa-angle-double-right"></i> 查看章节</a></li>
                                <li><a href="<?php echo url('admin/chapter/add'); ?>"><i class="fa fa-angle-double-right"></i> 添加章节</a></li>
                            </ul>
                        </li>
                        <li class="treeview" id="Exercises">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>习题</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo url('admin/exercises/index'); ?>"><i class="fa fa-angle-double-right"></i>所有习题</a></li>
                                <li><a href="<?php echo url('admin/exercises/add'); ?>"><i class="fa fa-angle-double-right"></i> 添加习题</a></li>
                            </ul>
                        </li>
<!--                         <li class="treeview" id="Paper">
                            <a href="#">
                                <i class="fa fa-files-o"></i> <span>试卷</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> 所有试卷</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> 添加试卷</a></li>
                            </ul>
                        </li> -->
                        <li class="treeview" id="Exam">
                            <a href="#">
                                <i class="fa fa-files-o"></i> <span>考场</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo url('admin/exam/index'); ?>"><i class="fa fa-angle-double-right"></i>考场配置</a></li>
                            </ul>
                        </li>

                        <li class="treeview" id="Setting">
                            <a href="#">
                                <i class="fa fa-cogs"></i> <span>设置</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> 系统设置</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        习题管理
                        <small>添加习题</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
                        <li><a href="#">习题</a></li>
                        <li class="active">添加习题</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>
                                </div>
                                <div class="box-body">
                                    <form method="POST" name="form" id="form" action="<?php echo url('admin/exercises/add'); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>所属章节(必填)</label>
                                            <div class="input-group">
                                                <select class="form-control" name="chapter_id">
                                                    <?php if(is_array($chapters) || $chapters instanceof \think\Collection || $chapters instanceof \think\Paginator): $i = 0; $__LIST__ = $chapters;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                    <option value="<?php echo $vo['CHAPTER_ID']; ?>"><?php echo $vo['CHAPTER_NAME']; ?></option>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label>题型(必填)</label>
                                            <div class="input-group">
                                                <select class="form-control" name="question_type" id="type-s">
                                                    <option value="1">单选</option>
                                                    <option value="2">多选</option>
                                                    <option value="5">判断</option>
                                                    <option value="6">简答</option>
                                                    <option value="3">共用题干单选题</option>
                                                    <option value="7">共用题干多选题</option>
                                                    <option value="8">备选答案题</option>
                                                </select>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label>题目内容(必填)</label>
                                            <div class="input-group">
                                                <textarea class="form-control" rows="15" placeholder="输入题目内容 ..." name="question_content" id="content"></textarea>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="form-group" id="option-o-group">
                                            <label>录入选项(必填)</label>&nbsp;&nbsp;
                                            <i class="fa fa-plus" id="add-o"></i>
                                            <div>
                                                <small class="text-muted">点击+新建选项，然后在单选或多选按钮上勾选正确答案</small>
                                            </div>
                                        </div>
                                        <div class="input-group" id="option-group" style="display: none;">
                                            <div class="rootQuestion">
<!--                                                 <div class="rootType">
                                                    <label>子题目题型</label>
                                                    <select class="form-control" name="subtype">
                                                        <option value="3">单选</option>
                                                        <option value="7">多选</option>
                                                    </select>
                                                </div>
 -->
                                                <div class="rootbox"><i class="fa fa-plus addRoot" style="margin: 15px 0;"></i>添加题干</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>题目解析(必填)</label>
                                            <div class="input-group">
                                                <textarea class="form-control" rows="3" placeholder="输入题目解析 ..." name="analytical"></textarea>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label>是否有效</label>
                                            <div class="input-group">
                                                <input type="radio" name="effective" value="1" checked="checked">是
                                                <input type="radio" name="effective" value="0">否
                                            </div>
                                        </div>
                                        <input type="hidden" name="subject_id" value="<?php echo $sid; ?>">
                                        <input type="submit" class="btn btn-flat btn-primary" value="添加">
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col (left) -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
                <script src="__ROOT__/public/static/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="__ROOT__/public/static/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="__ROOT__/public/static/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="__ROOT__/public/static/js/raphael-min.js"></script>
        <!-- Sparkline -->
        <script src="__ROOT__/public/static/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="__ROOT__/public/static/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="__ROOT__/public/static/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="__ROOT__/public/static/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="__ROOT__/public/static/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="__ROOT__/public/static/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="__ROOT__/public/static/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <!--<script src="__ROOT__/public/static/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>-->

        <!-- AdminLTE App -->
        <script src="__ROOT__/public/static/js/AdminLTE/app.js" type="text/javascript"></script>
        <script src="__ROOT__/public/static/js/bootbox.min.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!--<script src="__ROOT__/public/static/js/AdminLTE/dashboard.js" type="text/javascript"></script>
        <script src="__ROOT__/public/static/js/plugins/morris/morris.min.js" type="text/javascript"></script>-->
        <script>
        $(document).ready(function(){
          $(<?php echo '"#'.think\Request::instance()->controller().'"';?>).addClass('active');
          $(<?php echo '"#'.think\Request::instance()->controller().' .treeview-menu"';?>).css('display',"block");
        });
        </script>

        <script src="__ROOT__/public/static/js/bootstrapValidator.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                var editor = new wangEditor('content');
                editor.config.uploadImgUrl = '<?php echo url("admin/exercises/upload"); ?>';
                editor.config.hideLinkImg = true;
                editor.config.onchange = function (html) {
                    // html 即变化之后的内容
                    console.log(html)
                };
                var fns = editor.config.uploadImgFns;
                editor.config.menus = [
                    'source',
                    '|',
                    'bold',
                    'underline',
                    'italic',
                    'strikethrough',
                    'eraser',
                    'forecolor',
                    'bgcolor',
                    '|',
                    'quote',
                    'fontfamily',
                    'fontsize',
                    'head',
                    'unorderlist',
                    'orderlist',
                    'alignleft',
                    'aligncenter',
                    'alignright',
                    '|',
                    'link',
                    'unlink',
                    'table',
                    'emotion',
                    '|',
                    'img',
                    'video',
                    'location',
                    'insertcode',
                    '|',
                    'undo',
                    'redo',
                    'fullscreen',
                    'symbol'
                ];
                // -------- 插入图片的方法 --------
                function insertImg(src) {
                    var img = document.createElement('img');
                    img.onload = function () {
                        var html = '<img src="' + src + '" style="max-width:100%;"/>';
                        editor.command(null, 'insertHtml', html);
                        console.log('已插入图片，地址 ' + src);
                        img = null;
                    };
                    img.onerror = function () {
                        console.log('使用返回的结果获取图片，发生错误。请确认以下结果是否正确：' + src);
                        img = null;
                    };
                    img.src = src;

                }
                // -------- 定义load函数 --------
                fns.onload || (fns.onload = function (resultText, xhr) {
                    console.log('上传结束，返回结果为 ' + resultText);
                    if (resultText.indexOf('error|') === 0) {
                        // 提示错误
                        console.log('上传失败：' + resultText.split('|')[1]);
                        alert(resultText.split('|')[1]);
                    } else {
                        console.log('上传成功，即将插入编辑区域，结果为：' + resultText);
                        // 将结果插入编辑器
                        insertImg(resultText);
                    }
                });

                // -------- 定义tiemout函数 --------
                fns.ontimeout || (fns.ontimeout = function (xhr) {
                    console.log('上传图片超时');
                    alert('上传图片超时');
                });

                // -------- 定义error函数 --------
                fns.onerror || (fns.onerror = function (xhr) {
                    console.log('上传上图片发生错误');
                    alert('上传上图片发生错误');
                });

                editor.create();

                $('#form').bootstrapValidator({
                    fields: {
                        subject_name: {
                            validators: {
                                notEmpty: {
                                    message: '科目名称不能为空'
                                },
                                stringLength: {
                                    min: 0,
                                    max: 255,
                                    message: '科目名称过长'
                                }
                            }
                        },
                    	subject_description: {
                            validators: {
                                stringLength: {
                                    min: 0,
                                    max: 255,
                                    message: '描述文字过长'
                                }
                            }
                        }
                    }
                });


                $('#type-s').change(function() {
                    if ($(this).val() == 7 || $(this).val() == 3)  {
                        $('#option-group').css('display','block');
                        $('#option-o-group').css('display','none');
                    } else {
                         $('#option-o-group').css('display','block');
                         $('#option-group').css('display','none');
                    }
                });

                $('.addRoot').click(function() {
                    var index = $('.content').size();
                    $(this).parent().append('<div class="form-group root"><label>'+index+'.题干(必填)</label>&nbsp;&nbsp;<a href="javascript:;" class="addOption" data-index="'+index+'">添加选项</a><div class="input-group"><textarea class="form-control content" rows="3" placeholder="输入题目 ..." name="rootQuestion['+index+'][content]" style="margin:15px 0;"></textarea><div class="rOptions"></div><div class="input-group"><textarea class="form-control" rows="3" placeholder="第'+index+'小题解析 ..." name="rootQuestion['+index+'][analytical]" style="margin:15px 0;"></textarea></div></div><!-- /.input group --></div>');
                });

                $(document).on("click",'.addOption', function() {
                    var rindex = $(this).data('index');
                    var type = $('#type-s').val();
                    var index = $(this).parent().find('.rOptions input:text').size();
                    var code = String.fromCharCode(index+65);
                    var option = type == 3 ? '<input type="radio" class="minimal-red" name="rootQuestion['+rindex+'][right_answer][]" value="'+code+'">' : '<input type="checkbox" class="minimal-red" name="rootQuestion['+rindex+'][right_answer][]" value="'+code+'">';
                    $(this).parent().find('.rOptions').append(option+'<label>'+code+'.</label><input type="text" class="form-control" name="rootQuestion['+rindex+'][option][]" style="margin-bottom:15px;">');
                });

                $('#add-o').click(function(){
                    //判断题型
                    var type = $('#type-s').val();
                    var index = $('#option-o-group input:text').size();
                    var code = String.fromCharCode(index+65);
                    var value = index == 0 ? '正确' : '错误';
                    switch (parseInt(type)) {
                        case 1:
                            $('#option-o-group').append('<input type="radio" class="minimal-red" name="right_answer[]" value="'+code+'"><label>'+code+'.</label><input type="text" class="form-control" name="option[]" style="margin-bottom:15px;">');
                            break;
                        case 2:
                            $('#option-o-group').append('<input type="checkbox" class="minimal-red" name="right_answer[]" value="'+code+'"><label>'+code+'.</label><input type="text" class="form-control" name="option[]" style="margin-bottom:15px;">');
                            break;
                        case 5:
                            $('#option-o-group').append('<input type="radio" class="minimal-red" name="right_answer" value="'+code+'"><label>'+code+'.</label><input type="text" class="form-control" name="option[]" style="margin-bottom:15px;" value="'+value+'">');
                            break;
                    }

                });
            });
        </script>
        <script type="text/javascript" src="__ROOT__/public/static/js/wangEditor.min.js"></script>
        <script type="text/javascript" src="__ROOT__/public/static/js/custom-menu.js"></script>

    </body>
</html>
