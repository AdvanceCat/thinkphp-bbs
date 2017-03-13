<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}>',            // 模板引擎普通标签结束标记
    'TMPL_PARSE_STRING'  =>array(
        '__PUBLIC__' => __ROOT__.'/Public', // 更改默认的/Public 替换规则
    ),
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'bbs', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'toor', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PARAMS' =>  array(), // 数据库连接参数
    'DB_PREFIX' => 'dp_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
);