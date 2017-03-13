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
        <div class="col-md-9">
            <div class="panel">
                <div class="panel-heading">推荐话题</div>
                <div class="panel-body">
                    <ul class="media-list talk-topic">
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <div class="badge pull-right">20</div>
                                <h4 class="media-heading">
                                    <a href="index.php?m=topic&a=detail&tid=123"> wemall3.4更新 内核升级tp3.2.3</a>
                                </h4>
                                <div class="extra">
                                        <span class="category">
                                           <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                           <a href="index.php?m=user&a=index&uid=1">admin</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <small class="timeago" original-title="">2016年3月17日</small>
                                    <span class="slant">•</span>
                                    <span class="username">
                                            <i class="fa fa-eye"></i>7664                                        </span>
                                    <span class="slant">•</span>
                                    <span>最后回复
                                            <a href="index.php?m=user&a=index&uid=1">  admin</a>
                                        </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <div class="badge pull-right">3</div>
                                <h4 class="media-heading">
                                    <a href="index.php?m=topic&a=detail&tid=200"> WeMall开源微商城更新：支持微信小程序</a>
                                </h4>
                                <div class="extra">
                                        <span class="category">
                                           <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                           <a href="index.php?m=user&a=index&uid=1">admin</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <small class="timeago" original-title="">2016年10月19日</small>
                                    <span class="slant">•</span>
                                    <span class="username">
                                            <i class="fa fa-eye"></i>1287                                        </span>
                                    <span class="slant">•</span>
                                    <span>最后回复
                                            <a href="index.php?m=user&a=index&uid=1332">  2746175312</a>
                                        </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="index.php?m=topic&a=detail&tid=262"> WeMall千万新年豪礼送达，速领！</a>
                                </h4>
                                <div class="extra">
                                        <span class="category">
                                           <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                           <a href="index.php?m=user&a=index&uid=1">admin</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <small class="timeago" original-title="">4 周前</small>
                                    <span class="slant">•</span>
                                    <span class="username">
                                            <i class="fa fa-eye"></i>46                                        </span>
                                    <span class="slant">•</span>
                                    <span>最后回复
                                            <a href="index.php?m=user&a=index&uid=1">  admin</a>
                                        </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="index.php?m=topic&a=detail&tid=263"> 迅猫移动智能商城系统源码开售！实力派！</a>
                                </h4>
                                <div class="extra">
                                        <span class="category">
                                           <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                           <a href="index.php?m=user&a=index&uid=1">admin</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <small class="timeago" original-title="">4 周前</small>
                                    <span class="slant">•</span>
                                    <span class="username">
                                            <i class="fa fa-eye"></i>81                                        </span>
                                    <span class="slant">•</span>
                                    <span>最后回复
                                            <a href="index.php?m=user&a=index&uid=1">  admin</a>
                                        </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="index.php?m=topic&a=detail&tid=264"> 单用户商城微信端姗姗来迟！</a>
                                </h4>
                                <div class="extra">
                                        <span class="category">
                                           <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                           <a href="index.php?m=user&a=index&uid=1">admin</a>
                                        </span>
                                    <span class="slant">•</span>
                                    <small class="timeago" original-title="">4 周前</small>
                                    <span class="slant">•</span>
                                    <span class="username">
                                            <i class="fa fa-eye"></i>99                                        </span>
                                    <span class="slant">•</span>
                                    <span>最后回复
                                            <a href="index.php?m=user&a=index&uid=1">  admin</a>
                                        </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">最新话题</div>
                <div class="panel-body">
                    <ul class="media-list talk-topic">
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1332" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=270"> 请问怎么用wemall二次开发小程序</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=4">二次开发</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1332">2746175312</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">23 小时前</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>17                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <div class="badge pull-right">3</div>
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=200"> WeMall开源微商城更新：支持微信小程序</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1">admin</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">2016年10月19日</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>1287                                    </span>
                                    <span class="slant">•</span>
                                    <span>最后回复
                                        <a href="index.php?m=user&a=index&uid=1332">  2746175312</a>
                                    </span> </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1330" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <div class="badge pull-right">8</div>
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=269"> ssssssss</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=8">视频教程</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1330">wupz</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">3天前</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>12                                    </span>
                                    <span class="slant">•</span>
                                    <span>最后回复
                                        <a href="index.php?m=user&a=index&uid=1330">  wupz</a>
                                    </span> </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1330" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <div class="badge pull-right">4</div>
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=268"> 123</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1330">wupz</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">3天前</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>13                                    </span>
                                    <span class="slant">•</span>
                                    <span>最后回复
                                        <a href="index.php?m=user&a=index&uid=1330">  wupz</a>
                                    </span> </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1230" class="pull-left">
                                <img src="Public/upload/avatar/000/00/12/30_avatar_middle.jpg" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=267"> WeMall小程序春节后上线！</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=5">意见建议</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1230">wemallshop135</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">4 周前</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>76                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1230" class="pull-left">
                                <img src="Public/upload/avatar/000/00/12/30_avatar_middle.jpg" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=266"> 迅猫移动智能商城系统源码开售！实力派！</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=5">意见建议</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1230">wemallshop135</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">4 周前</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>59                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=265"> WeMall小程序春节后上线！</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1">admin</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">4 周前</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>39                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=264"> 单用户商城微信端姗姗来迟！</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1">admin</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">4 周前</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>99                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=263"> 迅猫移动智能商城系统源码开售！实力派！</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1">admin</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">4 周前</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>81                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a href="index.php?m=user&a=index&uid=1" class="pull-left">
                                <img src="Public/img/no_avatar_middle.png" class="talk-avatar middle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="index.php?m=topic&a=detail&tid=262"> WeMall千万新年豪礼送达，速领！</a></h4>
                                <div class="extra">
                                        <span class="category">
                                       <a href="index.php?m=topic&a=category&cid=2">系统发布</a>
                                    </span>
                                    <span class="slant">•</span>
                                    <a href="index.php?m=user&a=index&uid=1">admin</a>
                                    <span class="slant">•</span>
                                    <span class="timeago">4 周前</span>
                                    <span class="slant">•</span>
                                    <span class="username">
                                        <i class="fa fa-eye"></i>46                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center">
                        <ul class="pagination">
                            <li class="disabled"><a href="">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="index.php?m=topic&a=index&page=2">2</a></li>
                            <li><a href="index.php?m=topic&a=index&page=3">3</a></li>
                            <li><a href="index.php?m=topic&a=index&page=4">4</a></li>
                            <li><a href="index.php?m=topic&a=index&page=5">5</a></li>
                            <li><a href="index.php?m=topic&a=index&page=6">6</a></li>
                            <li><a href="index.php?m=topic&a=index&page=7">7</a></li>
                            <li><a href="index.php?m=topic&a=index&page=8">8</a></li>
                            <li><a href="index.php?m=topic&a=index&page=9">9</a></li>
                            <li><a href="index.php?m=topic&a=index&page=10">10</a></li>
                            <li><a class="next" href="index.php?m=topic&a=index&page=2">&raquo</a></li>
                            <li><a href="index.php?m=topic&a=index&page=26">26</a></li>
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