<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"/Users/apple/Web/dqexam/application/admin/view/exercises/edit.html";i:1531794999;s:58:"/Users/apple/Web/dqexam/application/admin/view/header.html";i:1507863360;s:55:"/Users/apple/Web/dqexam/application/admin/view/nav.html";i:1531636759;s:56:"/Users/apple/Web/dqexam/application/admin/view/menu.html";i:1531538544;s:58:"/Users/apple/Web/dqexam/application/admin/view/footer.html";i:1507863360;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>题库管理系统 | 编辑习题</title>
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
                                    <!-- <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div> -->
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
                        <!-- <li class="treeview" id="Admin">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>账号</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo url('admin/admin/index'); ?>"><i class="fa fa-angle-double-right"></i> 全部账号</a></li>
                                <li><a href="<?php echo url('admin/admin/add'); ?>"><i class="fa fa-angle-double-right"></i> 添加账号</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="treeview" id="Auth">
                            <a href="#">
                                <i class="fa fa-group"></i> <span>权限</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo url('admin/auth/group'); ?>"><i class="fa fa-angle-double-right"></i> 用户组管理</a></li>
                                <li><a href="<?php echo url('admin/auth/auth'); ?>"><i class="fa fa-angle-double-right"></i> 权限管理</a></li>
                                <li><a href="<?php echo url('admin/auth/assigment'); ?>"><i class="fa fa-angle-double-right"></i> 分配权限</a></li>
                            </ul>
                        </li> -->
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
                                <!-- <li><a href="<?php echo url('admin/exercises/type'); ?>"><i class="fa fa-angle-double-right"></i>题型管理</a></li> -->
                                <li><a href="<?php echo url('admin/exercises/index'); ?>"><i class="fa fa-angle-double-right"></i>所有习题</a></li>
                                <li><a href="<?php echo url('admin/exercises/add'); ?>"><i class="fa fa-angle-double-right"></i> 添加习题</a></li>
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
                        <small>编辑习题</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
                        <li><a href="#">习题</a></li>
                        <li class="active">编辑习题</li>
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
                                    <form method="POST" name="form" id="form" action="<?php echo url('admin/exercises/doedit'); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>所属科目(必选)</label>
                                            <div class="input-group">
                                                <select class="form-control" name="subject_id">
                                                    <option value="">请选择科目</option>
                                                    <?php if(is_array($subjects) || $subjects instanceof \think\Collection || $subjects instanceof \think\Paginator): $i = 0; $__LIST__ = $subjects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                    <option value="<?php echo $vo['subject_id']; ?>" <?php if($vo['subject_id'] == $question['subject_id']): ?> selected<?php endif; ?>><?php echo $vo['subject_name']; ?></option>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label>所属章节(必填)</label>
                                            <div class="input-group">
                                                <select class="form-control" name="chapter_id">
                                                </select>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label>题型(必填)</label>
                                            <div class="input-group">
                                                <select class="form-control" name="question_type" id="type-s">
                                                    <option value="1" <?php if($question['question_type'] == 1): ?> selected="selected"<?php endif; ?>>单选</option>
                                                    <option value="2" <?php if($question['question_type'] == 2): ?> selected="selected"<?php endif; ?>>多选</option>
                                                    <option value="10" <?php if($question['question_type'] == 10): ?> selected="selected"<?php endif; ?>>填空</option>
                                                </select>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label>题目内容(必填)</label>
                                            <div class="input-group">
                                                <textarea class="form-control" rows="15" placeholder="输入题目内容 ..." name="question_content" id="content"><?php echo $question['content']; ?></textarea>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label>录入选项(必填)</label><br/>
                                            <div class="input-group" id="option-group">
                                                <?php if($question['question_type'] == 1 || $question['question_type'] == 2): if(is_array($question['answer']) || $question['answer'] instanceof \think\Collection || $question['answer'] instanceof \think\Paginator): $i = 0; $__LIST__ = $question['answer'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($question['question_type'] == 1): ?>
                                                <input type="radio" class="minimal-red" name="right_answer[]" value="<?php echo chr($key+65); ?>" <?php if(in_array(chr($key+65),$answers)): ?> checked <?php endif; ?>><label><?php echo chr($key+65); ?></label>
                                                <textarea name="option[]" style="margin-bottom:15px;" id="option-<?php echo $key; ?>"><?php echo explode('.',$vo)[1];?></textarea>
                                                <?php else: ?>
                                                <input type="checkbox" class="minimal-red" name="right_answer[]" value="<?php echo chr($key+65); ?>" <?php if(in_array(chr($key+65),$answers)): ?> checked <?php endif; ?>><label><?php echo chr($key+65); ?></label><textarea name="option[]" style="margin-bottom:15px;" id="option-<?php echo $key; ?>"><?php echo explode('.',$vo)[1];?></textarea>
                                                <hr/>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; else: ?>
                                                <a href="javascript:;" onClick="addFill();" class="btn btn-flat btn-primary">添加答案</a><br/><br/>
                                                <?php if(is_array($question['answer']) || $question['answer'] instanceof \think\Collection || $question['answer'] instanceof \think\Paginator): $k = 0; $__LIST__ = $question['answer'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                                第<?php echo $k; ?>空：<input type="text" class="form-control fill-input" name="correct_answer[]" value="<?php echo $vo; ?>">
                                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>题目解析(必填)</label>
                                            <div class="input-group">
                                                <textarea class="form-control" rows="3" placeholder="输入题目解析 ..." name="analytical"><?php echo $question['analytical']; ?></textarea>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <input type="submit" class="btn btn-flat btn-primary" value="保存">
                                        <input type="hidden" name="sid" value="<?php echo $question['exercises_id']; ?>">
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
            var addFill = function() {
                var index = $('.fill-input').length;
                $('#option-o-group').append('第'+(index+1)+'空：<input type="text" class="form-control fill-input" name="correct_answer[]">');
            }
            $(document).ready(function() {
                CKEDITOR.replace('content');
                CKEDITOR.replace('analytical');

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

                function createOption() {
                    var type = $('#type-s').val();
                    var index = $('#option-o-group input:text').size();
                    var code = String.fromCharCode(index+65);
                    var value = index == 0 ? '正确' : '错误';
                    switch (parseInt(type)) {
                        case 1:
                            for(var i=0;i<4;i++) {
                                $('#option-group input').attr('type','radio');
                                $('#option-group input').attr('name','right_answer[]');
                                CKEDITOR.replace("option-"+i);
                            }
                            break;
                        case 2:
                            for(var i=0;i<4;i++) {
                                $('#option-group input').attr('type','checkbox');
                                $('#option-group input').attr('name','right_answer[]');
                                CKEDITOR.replace("option-"+i);
                            }
                            break;
                    }
                }
                createOption();

                $('#type-s').change(function() {
                    createOption();
                });

                
                var subject = $('select[name="subject_id"]').val();
                $.get('<?php echo url("admin/chapter/getChapters"); ?>?sid='+subject,function(json){
                    var obj = jQuery.parseJSON(json);
                    var html = '';
                    $.each(obj,function(index,item){
                        if (parseInt(item.chapter_id) === parseInt('<?php echo $question['chapter_id']; ?>')) {
                            html += '<option value="'+item.chapter_id+'" selected="selected">'+item.chapter_name+'</option>';
                        } else {
                            html += '<option value="'+item.chapter_id+'">'+item.chapter_name+'</option>';
                        }
                    });
                    $('select[name="chapter_id"]').html(html);
                });
            });

            $('select[name="subject_id"]').change(function(){
                $.get('<?php echo url("admin/chapter/getChapters"); ?>?sid='+$(this).val(),function(json){
                    var obj = jQuery.parseJSON(json);
                    var html = '';
                    $.each(obj,function(index,item){
                        html += '<option value="'+item.chapter_id+'">'+item.chapter_name+'</option>';
                    });
                    $('select[name="chapter_id"]').html(html);
                });
            });
        </script>
        <script type="text/javascript" src="__ROOT__/public/static/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="__ROOT__/public/static/js/custom-menu.js"></script>

    </body>
</html>
