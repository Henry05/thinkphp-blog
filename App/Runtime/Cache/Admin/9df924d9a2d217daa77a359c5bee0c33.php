<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>W3CAY后台管理</title>
</head>
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/index.css">
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/public.css">
 <body>

<header>
	<span class="title"><i class="admin_icon"></i>W3CAY后台管理</span>
	<a href="<?php echo U('Admin/Login/logout');?>" class="logout">退出<i class="logout-icon"></i></a>
</header>

<div class="contain">
<div class="nav">
	<ul class="menu">
	<li id='li-0'><a class="aclick" href='/W3CAY/index.php'  target="_blank">网站首页</a>
	<li id='li-1'><a class="aclick" href='#' >系统管理</a>
		<ul class='hid-ul'>
		<li><a href='#'>系统参数</a></li>
		<li><a href='#'>个人信息</a></li>
		
		<li><a href='#'>清除缓存</a></li>
		</ul>
	</li>
	<li id='li-3'><a class="aclick" href='#'>内容管理</a>
		<ul class='hid-ul'>
		<li><a href="<?php echo U('Admin/Article/editer');?>" target="show">添加文章</a></li>
		<li><a href="<?php echo U('Admin/Article/index');?>" target="show">文章列表</a></li>	
		<li><a href="<?php echo U('Admin/Category/index');?>" target="show">栏目管理</a></li>
		<li><a href='#'>评论管理</a></li>
		<li><a href='#'>图片管理</a></li>
		<li><a href='#'>文件管理</a></li>
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
<iframe src="<?php echo U('Admin/Index/readme');?>" class="content" frameborder="0"  name="show"></iframe>
</div>

<!--[if lt IE 9]>
<script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]

<!- -[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/Jquery/jquery-2.1.3.js"></script>
<!--<![endif]-->

<!--   首页Js引入文件 -->
<script src="/W3CAY/Public/Admin/Js/index.js"></script>
</body> 
</html>