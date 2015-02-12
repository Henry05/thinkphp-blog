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


<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Home/CSS/theme.css" />
<div class="topic-container">
	<?php if(is_array($article)): foreach($article as $key=>$v): ?><div class="alist">	
	<div  class="alist-title"><a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html">
	<span class="time">[<?php echo ($v["a_time"]); ?>]</span>	<h3><?php echo ($v["a_title"]); ?></h3></a></div>
	<a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html"><div class="alist-digest"><?php echo (msubstr($v["a_content"],0,180,'utf-8')); ?></div></a>
	<div class="alsit-attr">
	
	</div>
	</div><?php endforeach; endif; ?>
	
	
</div>
<footer class="footer">
<div class="footer-con">
<div class="me">
	<i class="myicon"><a href="http://w3cay.com" target="_blank"><img  src="/W3CAY/Public/Home/IMG/myicon.png" alt="关于我" title="关于我" width="60"  height="60" /></a> </i>
	<div class="mylink"></div>
	<a href="http://w3cay.com" alt="关于我" title="关于我" target="_blank"><span class="mymoto"></span></a>
</div>
  <div class="footer-left">

  <span class="useread" >
  Powered By <a href="www.thinkphp.cn" target="_blank"><img class="thinkphp_logo" src="/W3CAY/Public/Home/IMG/thinkphp_logo.png" alt="ThinkPHP" title="ThinkPHP" width="20"  height="20" />ThinkPHP</a> 
 &nbsp
  Host By
  <a href="http://www.zzidc.com" target="_blank"><img class="jingan_logo" src="http://www.zzidc.com/images/gainet_host.gif" width="95"  height="40" alt="景安网络" title="景安网络" />景安网络</a>
  </span>
    <span class="copyright">
 <i class="copy-icon"></i> <a href="http://w3cay.com" target="_blank">安望云海|W3CAY</a> 
  &nbsp豫ICP备15003362号&nbsp <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254403531'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1254403531' type='text/javascript'%3E%3C/script%3E"));</script> 
  </span>
  </div>
  </div>
</footer>


<script type="text/javascript">
	//导航下拉效果
	$(document).ready(function(){
  $(".btn").click(function(){
    $(".nav").slideToggle("slow");
  });
}); 
</script>
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