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
        <div class="panel talk-form">
            <div class="panel-heading">
                登录
            </div>
            <form id="talk-login" action="index.php?m=user&a=login" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">邮箱：</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="email" name="email" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">密码：</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-4">
                        <label for="">
                            <input type="checkbox" name="is_remember" value="1"> 记住我</label>
                    </div>
                    <div class="col-md-2">
                        <a href="index.php?m=user&a=password">忘记密码?</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-6">
                        <button type="submit" class="btn btn-primary">登录</button>
                    </div>
                </div>
                <input type="hidden" name="_token" value="bfef5fc5b4f02caffe98eedb560246be_e07aa2153a90ed7d09901ebaa26993aa" />
            </form>
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
    $("#talk-login").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: "required",
        },
        messages: {
            email: {
                required: "邮箱不能为空",
                email: "邮箱格式不正确"
            },
            password: {
                required: "密码不能为空"
            }
        },
        submitHandler: function(e) {
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "<?php echo U('Home/sign/index');?>",
                data: $("#talk-login").serialize(),
                success: function(data) {
                    if (data.status == 0) {
                        bootbox.alert(data.info);
                        return false;
                    } else {
                        window.location.href = data.url;
                    }

                }
            })
        }
    });
</script>