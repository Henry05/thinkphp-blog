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
    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li ><a href="/W3CAY/topic/<?php echo ($v["c_value"]); ?>"><?php echo ($v["c_name"]); ?></a></li><?php endforeach; endif; ?>
        <li>
          <form class="search" role="search"> 
          <input type="text" class="search-input" placeholder="Search">
          </form>
        </li>
   </ul></nav>
 </header>


 <script src="/W3CAY/Public/Highlighter/shCore.js" type="text/javascript"></script>
<link href="/W3CAY/Public/Highlighter/shCoreDefault.css"rel="stylesheet" type="text/css" >
    <script type="text/javascript" language="javascript">
        $(function(){
            SyntaxHighlighter.all();
        });
    </script>
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Home/CSS/article.css" />
<script type="text/javascript">
	SyntaxHighlighter.all();
</script>
<div class="article-container">
	<div class="article">	
	<div  class="article-title"><h4><?php echo ($article["a_title"]); ?></h4></div>
	<div class="article-detail"><?php echo ($article["a_content"]); ?></div>
	<div class="article-attr">
	<span><?php echo ($article["a_time"]); ?></span>	
	</div>
	</div>

</div>
<footer class="footer">
<div class="desc"></div>
  <span class="botm">
  ©  <a href="http://w3cay.com" target="_blank">安望云海|W3CAY</a> 
  &nbsp豫ICP备15003362号
  </span>
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