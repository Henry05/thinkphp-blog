<?php
return array(
	'SHOW_PAGE_TRACE' =>true, //显示调试页面
	'MODULE_ALLOW_LIST'    =>    array('Home','CAY_ADMIN','Admin'),//设置模块列表
    'DEFAULT_MODULE'       =>    'Home',//设置默认模块
    'URL_MODULE_MAP'       =>    array('cay_admin'=>'admin'),//模块映射

    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'w3cay', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '123456', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'cay_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集


   
);