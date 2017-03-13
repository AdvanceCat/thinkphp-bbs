<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <title>话题列表 - WeMall开源微商城论坛-www.inuoer.com - Powered by WeMall </title>
    <meta name="keywords" content="开源商城,微商城,微信商城,商城源码,微商城源码,微信商城源码,商城系统,分销商城,b2b2c商城系统,020商城系统,多用户商城系统 " />
    <meta name="description" content="WeMall微商城系统是一款永久免费开源的商城系统，提供微商城源码，适用于中小企业及个人。" />
    <link href="/bbs/Public/css/bootstrap.css" rel="stylesheet">
    <link href="/bbs/Public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/bbs/Public/css/font-awesome/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="/bbs/Public/js/html5.js"></script>
    <script src="/bbs/Public/js/css3.js"></script>
    <script src="/bbs/Public/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle needsclick" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/bbs">WeMall</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!--<li><a href="index.php?m=feed&a=index">动态</a></li>-->
                <li class="active"><a href="<?php echo U('index');?>">话题</a></li>
            </ul>
            <?php if($_SESSION['id'] > 0): ?><ul class="nav navbar-nav navbar-right ">
                    <li>
                        <a href="<?php echo U('Home/user/', array('uid' => $_SESSION['id']));?>">
                            <?php echo ($_SESSION['username']); ?>						</a>
                    </li>
                    <li class="notify">
                        <a href="/index.php?m=message&a=notify">
                            <i class="fa fa-bell"></i>
                        </a>
                    </li>
                    <li class="inbox">
                        <a href="/index.php?m=message&a=index">
                            <i class="fa fa-envelope-o"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('Home/account/index');?>"><i class="fa fa-user"></i>账号设置</a></li>
                            <li class="divider"></li>

                            <li><a href="<?php echo U('Home/sign/logout/');?>"><i class="fa fa-power-off"></i>退出</a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
                <?php else: ?>
                <ul class="nav navbar-nav navbar-right ">
                <li><a href="<?php echo U('Home/sign/signup');?>">注册</a></li>
                <li><a href="<?php echo U('Home/sign/index');?>">登录</a></li>
                </ul><?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="account-setting">
                    <div class="panel-heading">
                        <h4>账号设置</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li><a href="<?php echo U('Home/account/index');?>">基本信息</a></li>
                            <li><a href="<?php echo U('Home/account/avatar');?>">修改头像</a></li>
                            <li class="active"><a href="<?php echo U('Home/account/password');?>">密码安全</a></li>
                        </ul>
                        <div class="talk-account">
                            <form id="password" class="form-horizontal" action="<?php echo U('Home/account/password');?>" method="post" novalidate="novalidate">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="password">当前密码：</label>
                                        <div class="col-lg-4">
                                            <input type="password" class="form-control" id="username" name="password" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="newPassword">新密码：</label>
                                        <div class="col-lg-4">
                                            <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="reNewPassword">确认密码：</label>
                                        <div class="col-lg-4">
                                            <input type="password" class="form-control" name="reNewPassword" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-6">
                                            <button type="submit" class="btn btn-primary">保存</button>
                                        </div>
                                    </div>
                                </fieldset>
                                <input type="hidden" name="_token" value="42f818190e667e2ddd078d70894d875a_15cd797c9d1ab9794a08b0c57ebf5c7d"></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#" class="scroll-up hidden-xs">回到顶部</a>
<footer>
    <div class="container">
        <div class="row">
            <p>Powered By inuoer.com</p>
        </div>
    </div>
</footer>
<script src="/bbs/Public/js/jquery.js"></script>
<script src="/bbs/Public/js/jquery-migrate.js"></script>
<script src="/bbs/Public/js/jquery.validate.js"></script>
<script src="/bbs/Public/js/bootstrap.js"></script>
<script src="/bbs/Public/js/bootbox.js"></script>
<script src="/bbs/Public/js/jquery.tmpl.js"></script>
<script src="/bbs/Public/js/main.js"></script>
</body>
</html>
<script>
    $(function() {

        $("#password").validate({
            rules: {
                password: "required",
                newPassword: "required",
                reNewPassword: {
                    required: true,
                    equalTo: "#newPassword"
                },
            },
            messages: {
                password: {
                    required: "当前密码不能为空",
                },
                newPassword: {
                    required: "新密码不能为空"
                },
                reNewPassword: {
                    required: "确认密码不能为空"
                }
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "<?php echo U('Home/account/password');?>",
                    data: $("#password").serialize(),
                    success: function(data){
                        if( data.success ) {
                            bootbox.alert({
                                message: data.info,
                                callback: function() {
                                    window.location.href = '/bbs/index.php/Home/account/password.html';
                                }
                            });
                        } else {
                            bootbox.alert(data.info);
                        }

                    }
                })
            }
        });
    });
</script>