<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>W3CAY后台管理</title>
</head>
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/layout.css">
<body>
<header>
	<span class="title"><i class="admin_icon"></i>W3CAY后台管理</span>
	<a href="<?php echo U('Admin/Login/logout');?>" class="logout">退出<i class="logout-icon"></i></a>
</header>

<div class="nav">
	<ul class="menu">
	<li id='li-1'><a class="aclick" href='#'>系统管理</a>
		<ul class='hid-ul'>
		<li><a href='#'>系统参数</a></li>
		<li><a href='#'>个人信息</a></li>
		<li><a href='#'>清除缓存</a></li>
		</ul>
	</li>
	<li id='li-2'><a class="aclick" href='#'>栏目管理</a>
		<ul class='hid-ul'>
		<li><a href='#'>前台栏目</a></li>
		<li><a href='#'>个人信息</a></li>
		<li><a href='#'>清除缓存</a></li>
		</ul>
	</li>
	<li id='li-3'><a class="aclick" href='#'>内容管理</a>
		<ul class='hid-ul'>
		<li><a href='#'>文章管理</a></li>
		<li><a href='#'>清除缓存</a></li>
		</ul>
	</li>
	<li id='li-4'><a class="aclick" href='#'>扩展管理</a>
		<ul class='hid-ul'>
		<li><a href='#'>友情链接</a></li>
		<li><a href='#'>个人信息</a></li>
		<li><a href='#'>清除缓存</a></li>
		</ul>
	</li>
	</ul>
</div>

<div class="content">
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/index.css">
<div class="readme">
<h1 class="index_title">安望云海-致力于Html/Css/Js/WEB开发</h1>
<h2 class="index_title">WWW.W3CAY.COM</h2>
<h3>配置信息</h3>
</div>
</div>

<!--[if lt IE 9]>
<script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/Jquery/jquery-2.1.3.js"></script>
<!--<![endif]-->

<!--   首页Js引入文件 -->
<script src="/W3CAY/Public/Admin/Js/layout.js"></script>
</body>
</html>