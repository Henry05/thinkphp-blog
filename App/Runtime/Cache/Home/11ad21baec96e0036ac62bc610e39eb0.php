<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>留言 - 安望云海</title>
        <meta name="Keywords" content="前端开发,html,css,js" />
        <meta name="Description" content="不愿成为知识的过客，记录和分享前端开发学习中的点点滴滴；用编程与艺术的完美结合，创造我心中的互联网世界！"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp"/>
        <link rel="alternate icon" type="image/ico" href="/Blog/Public/Home/IMG/favicon.ico">


    </head>
    <body>
        <!--   导航栏样式表 -->
<link rel="stylesheet" href="/Blog/Public/Home/CSS/layout.css"/>
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
</head>
<body>
<!-- 导航部分 -->
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
             <li ><a href="/Blog/Index/feedplus">Feed+</a></li>
             <li ><a href="/Blog/message">留言</a></li>
            <li ><a href="/Blog/me" target="_blank">关于我</a></li>
        </ul></nav>
    </header>
        <div id="container">
            <div id="SOHUCS"></div>
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
	// <script>
	// var _hmt = _hmt || [];
	// (function() {
	//   var hm = document.createElement("script");
	//   hm.src = "//hm.baidu.com/hm.js?c45eb0f0bbd3349f5c85f1afc603bb1f";
	//   var s = document.getElementsByTagName("script")[0]; 
	//   s.parentNode.insertBefore(hm, s);
	// })();
	// </script>
</div>

</html>
    </body>
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
        <style type="text/css">
        body{
             background:#f0f0f0;
        }
                #container{
                    min-height:650px;
                    width:65%;
                    margin:auto ;
                    padding-top:60px;

                }
                .service-wrap-w {
                    display:none;
                }
                .head-img-w img {
                    border-radius: 50%;
                }
                #SOHUCS #SOHU_MAIN .section-list-w .block-cont-gw .cont-head-gw .head-img-gw{
                     border-radius: 50%;
                     padding: 0px; 
                     /*-webkit-transform:rotate(90deg);*/
                }
                .clear-g:hover .head-img-gw{
                    -webkit-transform:rotate(360deg);
                    -webkit-transition:-webkit-transform 0.5s;
                }
                #SOHUCS #SOHU_MAIN .section-list-w .block-cont-gw .msg-wrap-gw {
                    padding: 7px 0 0 62px;
                }
               #SOHUCS #SOHU_MAIN .section-title-w .join-wrap-w .wrap-name-w , #SOHUCS #SOHU_MAIN .section-title-w .join-wrap-w .wrap-join-w, #SOHUCS #SOHU_MAIN .section-title-w .join-wrap-w .join-strong-gw {
                     display:none;
                }
              #SOHUCS #SOHU_MAIN .section-title-w .join-wrap-w strong.wrap-name-b{
                    display:none !important;
                }
               @media screen and (max-width: 685px){
                 #container{
                    width:100%;
                }
             }
        </style>
</html>