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
            <a class="navbar-brand" href="index.php?m=topic&a=index">WeMall</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php?m=feed&a=index">动态</a></li>
                <li class="active"><a href="index.php?m=topic&a=index">话题</a></li>
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
                            <li><a href="/index.php?m=account&a=settings"><i class="fa fa-user"></i>账号设置</a></li>
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
            <div class="panel-body">
                <ul class="media-list talk-user">
                    <li class="media">
                        <img src="Public/img/no_avatar_big.png" class="talk-avatar big pull-left">
                        <div class="media-body">
                            <h3>admin</h3>
                            <ul>
                                <li>
                                    <strong>2014-06-03</strong> 加入
                                    <span class="slant">•</span> <strong>85525</strong> 积分
                                </li>
                                <li>
                                </li>
                                <li>
                                    还没有个人介绍 </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="user-action panel">
                <ul class="nav nav-tabs">
                    <li><a href="index.php?m=user&a=index&uid=1">话题</a></li>
                    <li class="active"><a href="index.php?m=user&a=followers&uid=1">关注</a></li>
                    <li><a href="index.php?m=user&a=fans&uid=1">粉丝</a></li>
                </ul>
                <div class="tab-content">
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="index.php?m=user&a=index&uid=1283">
                                <img src="Public/upload/avatar/000/00/12/83_avatar_middle.jpg" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="index.php?m=user&a=index&uid=1283">KoaHub</a></h4>
                                <p>koahub软件市场</p>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center">
                        <ul class="pagination">
                            <li class="disabled"><a href="">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="index.php?m=user&a=followers&uid=1&page=2">2</a></li>
                            <li><a class="next" href="index.php?m=user&a=followers&uid=1&page=2">&raquo</a></li>
                        </ul>
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