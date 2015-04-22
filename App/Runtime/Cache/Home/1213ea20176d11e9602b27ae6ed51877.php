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

  </head>

<!--   导航栏样式表 -->
  <link rel="stylesheet" href="/W3CAY/Public/Home/CSS/layout.css"/>
<script type="text/javascript">
//导航下拉效果
 $(function(){
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

  </head>
  <body>
<!-- 导航部分 -->
<header>
 <a href="http://w3cay.com" class="title">
   <i class="logo"><img src="/W3CAY/Public/Home/IMG/logo.png" width="45px" height="45px"></i>
   <i class="name"></i>
     <i class="beta"></i>
 </a><button class="btn" ></button><nav class='nav'>
    <ul>
      <li ><a href="http://localhost/W3CAY/">首页</a></li>
    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li ><a href="/W3CAY/topic/<?php echo ($v["c_value"]); ?>"><?php echo ($v["c_name"]); ?></a></li><?php endforeach; endif; ?>
      <li ><a href="/W3CAY/Index/aboutme.html">Me</a></li>
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
  <div class="article-attr">
    <span>发布于 <?php echo ($article["a_time"]); ?></span><span><?php echo ($article["a_clicks"]); ?>次阅读</span>
  </div>
	<div class="article-detail"><?php echo (stripslashes($article["a_content"])); ?></div>

  <div id="SOHUCS" sid="<?php echo ($article["a_id"]); ?>" ></div>
	</div>



</div>


<footer class="footer">
    <div class="footer-con">
        <a  href="http://w3cay.com" alt="关于我" title="关于我" target="_blank">
        <div class="me">
            <i class="myicon"><img  src="/W3CAY/Public/Home/IMG/myicon.png" alt="关于我" title="关于我" width="60"  height="60" /> </i>
            <div class="mylink"></div>
            <span class="mymoto"></span>
            </a>
        </div>
        <div class="footer-left">
            <div id="line"></div>

            <span class="useread" >
            Powered by <a href="http://www.thinkphp.cn"  rel="nofollow" target="_blank">ThinkPHP</a>
            &nbsp
            Host by
            <a href="http://www.zzidc.com"  rel="nofollow" target="_blank">景安网络</a>
            </span>
            <span class="copyright">
            <i class="copy-icon"></i> <a href="http://w3cay.com" target="_blank">安望云海|W3CAY</a>
            &nbsp豫ICP备15003362号&nbsp <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254403531'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1254403531' type='text/javascript'%3E%3C/script%3E"));</script>
            </span>
        </div>
    </div>
<!--       <div class="totop"></div>-->
 </footer>

<!--   首页Js引入文件 -->
<script src="/W3CAY/Public/Home/Js/layout.js"></script>
</body>
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