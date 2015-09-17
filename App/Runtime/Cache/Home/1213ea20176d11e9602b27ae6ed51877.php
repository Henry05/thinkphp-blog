<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php echo ($article["a_title"]); ?> - <?php echo ($article["c_name"]); ?> - 安望云海</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/ico" href="/Blog/Public/Home/IMG/favicon.ico">
  <link rel="stylesheet" type="text/css" href="/Blog/Public/Home/CSS/article.css" />
  <link rel="stylesheet" type="text/css" href="/Blog/Public/editor/markdown.css" />
  <script type="text/javascript" src=""></script>

  </head>
<link rel="alternate icon" type="image/ico" href="/Blog/Public/Home/IMG/favicon.ico">
        <link rel="stylesheet" href="/Blog/Public/Home/CSS/layout.css"/>
    </head>
<body>
    <header>
    <a href="/Blog" class="title">
    <i class="logo"></i>
    <i class="name"></i>
    </a>
    <div class="nav-btn">
      <ul class="btn">
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <nav class='nav'>
        <ul>
            <li ><a href="/Blog">首页</a></li>
            <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li ><a href="/Blog/topic/<?php echo ($v["c_value"]); ?>"><?php echo ($v["c_name"]); ?></a></li><?php endforeach; endif; ?>
            <li ><a href="/Blog/me" >关于</a></li>
        </ul></nav>
    </header>
<div class="article-container">
	<div class="article">	
	<div  class="article-title"><h1><?php echo ($article["a_title"]); ?></h1></div>
  <div class="article-attr">
   <span> <i id="time" class="attr-icon"></i>发布于 <?php echo ($article["a_time"]); ?></span>
   <span><i id="read" class="attr-icon"></i><?php echo ($article["a_clicks"]); ?>次阅读</span>
  </div>
	<div class="article-detail markdown "><?php echo ($article["a_content"]); ?> </div>

  <div id="SOHUCS" sid="<?php echo ($article["a_id"]); ?>" ></div>
	</div>
</div>
<footer class="footer">
    <div class="footer-con">
        <span class="copyright">
        <a  href="http://w3cay.com" target="_blank">&copy; 安望云海|W3CAY</a>
        <a  href="http://www.miitbeian.gov.cn/" rel="nofollow"> &nbsp豫ICP备15003362&nbsp</a>
        </span>
    </div>
</footer>
</body>
<!--[if lt IE 9]>
<script src="/Blog/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Blog/Public/Jquery/jquery-2.1.4.min.js"></script>
<!--<![endif]-->
<script src="/Blog/Public/Home/JS/html5shiv.min.js"></script>
<script type="text/javascript">
//导航下拉效果
$(function(){
$(".nav-btn").click(function(){
    $(".nav").fadeToggle("1000");
    $(".btn").toggleClass("onbtn");
});
});
</script>
<div style="display:none">
<a href="http://www.zzidc.com">  title="景安网络" /></a>
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?c45eb0f0bbd3349f5c85f1afc603bb1f";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
</div>

<script src="/Blog/Public/Home/JS/comment.js"></script>