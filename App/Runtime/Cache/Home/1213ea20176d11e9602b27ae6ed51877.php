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
  <link rel="alternate icon" type="image/ico" href="/W3CAY/Public/Home/IMG/favicon.ico">
  <link rel="stylesheet" type="text/css" href="/W3CAY/Public/Home/CSS/article.css" />
  <link rel="stylesheet" type="text/css" href="/W3CAY/Public/editor/markdown.css" />
  <script type="text/javascript" src=""></script>

  </head>
<!--   导航栏样式表 -->
<link rel="stylesheet" href="/W3CAY/Public/Home/CSS/layout.css"/>
<!--[if lt IE 9]>
<script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/Jquery/jquery-2.1.4.min.js"></script>
<!--<![endif]-->
<script src="/W3CAY/Public/Home/JS/html5shiv.min.js"></script>
<script type="text/javascript">
//导航下拉效果
$(function(){
$(".nav-btn").click(function(){
    $(".nav").fadeToggle("1000");
    $(".btn").toggleClass("onbtn");
});
});
</script>
</head>
<body>
<!-- 导航部分 -->
<header>
    <a href="/W3CAY" class="title">
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
            <li ><a href="/W3CAY">首页</a></li>
            <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li ><a href="/W3CAY/topic/<?php echo ($v["c_value"]); ?>"><?php echo ($v["c_name"]); ?></a></li><?php endforeach; endif; ?>
             <li ><a href="/W3CAY/message">留言</a></li>
            <li ><a href="/W3CAY/me" target="_blank">关于我</a></li>
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
<div style="display:none">
   <a href="http://www.zzidc.com">  title="景安网络" /></a>
<script type="text/javascript">
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254403531'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1254403531' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>

</html>
<script>
// 评论模块JS实现
  (function(){
    screenWidth=$(document).width();
   if (screenWidth>685) {
    //非手机屏幕
    var appid = 'cyrHd3JxO',
    conf = 'prod_fa1020ba5784e2e7d357d612bf4b224e';
    var doc = document,
    s = doc.createElement('script'),
    h = doc.getElementsByTagName('head')[0] || doc.head || doc.documentElement;
    s.type = 'text/javascript';
    s.charset = 'utf-8';
    s.src =  'http://assets.changyan.sohu.com/upload/changyan.js?conf='+ conf +'&appid=' + appid;
    h.insertBefore(s,h.firstChild);
    window.SCS_NO_IFRAME = true;

   }

   else{
    //手机屏幕
    var expire_time = parseInt((new Date()).getTime()/(5*60*1000));
    var head = document.head || document.getElementsByTagName("head")[0] || document.documentElement;
    var script_version = document.createElement("script"),script_cyan = document.createElement("script");
    script_version.type = script_cyan.type = "text/javascript";
    script_version.charset = script_cyan.charset = "utf-8";
    script_version.onload = function(){
        script_cyan.id = 'changyan_mobile_js';
        script_cyan.src = 'http://changyan.itc.cn/upload/mobile/wap-js/changyan_mobile.js?client_id=cyrHd3JxO&'
                        + 'conf=prod_fa1020ba5784e2e7d357d612bf4b224e&version=' + cyan_resource_version;
        head.insertBefore(script_cyan, head.firstChild);
    };
    script_version.src = 'http://changyan.sohu.com/upload/mobile/wap-js/version.js?_='+expire_time;
    head.insertBefore(script_version, head.firstChild);
   };

 })();

 

</script>