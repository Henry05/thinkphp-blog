<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>安望云海-致力于HTML/Home/CSS/JS/WEB开发</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/ico" href="/W3CAY/Public/Home/IMG/favicon.ico">
<!--   导航栏样式表 -->
  <link rel="stylesheet" href="/W3CAY/Public/Home/CSS/layout.css"/>
  </head>
  <body>
<!-- 导航部分 -->
<header>
 <a href="http://w3cay.com" class="title">
   <i class="logo"><img src="/W3CAY/Public/Home/IMG/logo.png" width="45px" height="45px"></i>
   <i class="name"></i>
 </a><button class="btn" ></button><nav class='nav'>
    <ul>
      <li ><a href="http://localhost/W3CAY/">首页</a></li>
    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li ><a href="/W3CAY/index.php/Home/Index/theme/topic/<?php echo ($v["c_value"]); ?>.html"><?php echo ($v["c_name"]); ?></a></li><?php endforeach; endif; ?>
        <li>
          <form class="search" role="search"> 
          <input type="text" class="search-input" placeholder="Search">
          </form>
        </li>
   </ul></nav>
 </header>
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Home/CSS/theme.css" />
<div class="topic-container">
	<div class="alist">	
	<div  class="alist-title"><a href="#"><h4>2015年的API将成为这五方面的主力</h4></a></div>
	<a href="#"><div class="alist-digest">Web API为今天的企业和负责构建推进事物前进技术的人们开放了许多新的远景。多年来，API一直是开发者用于构建和连接应用工具包中的一部分。现在Web API、或者可以通过互联网调用服务的接口将是一个新兴的场景——从物联网到数据分析到终端用户跟踪集成。SOA软件公司的Roberto Medrano已经发布了他对API将在15年做什么的想法：</div></a>
	<div class="alsit-attr">
	<span>2015-2-5</span>	
	</div>
	</div>
	<div class="alist">		</div>
	<div class="alist">		</div>
	<div class="alist">		</div>
</div>
<footer class="footer">
  <p>© 2015 <a href="http://www.w3cay.com" target="_blank">安望云海|W3CAY</a> 
</footer>

<!--[if lt IE 9]>
<script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/Jquery/jquery-2.1.3.js"></script>
<!--<![endif]-->

<!--   首页Js引入文件 -->
<script src="/W3CAY/Public/Home/Js/home.js"></script>
<script src="/W3CAY/Public/Home/Js/layout.js"></script>
</body>
</html>