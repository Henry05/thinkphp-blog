<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>W3CAY后台管理</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/layout.css">
<div class="nav">
	<ul class="menu">
	<li id='li-1'><a class="aclick" href='#' >系统管理</a>
		<ul class='hid-ul'>
		<li><a href='#'>系统参数</a></li>
		<li><a href='#'>个人信息</a></li>
		<li><a href='#'>清除缓存</a></li>
		</ul>
	</li>
	<li id='li-2'><a class="aclick" href='#'>栏目管理</a>
		<ul class='hid-ul'>
		<li><a href="<?php echo U('Admin/Category/index');?>" target="show">前台栏目</a></li>
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