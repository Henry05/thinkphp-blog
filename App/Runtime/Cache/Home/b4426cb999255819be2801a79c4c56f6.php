<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title><?php echo ($c_name); ?> - 安望云海</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
        content="width=device-width, listial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp"/>
        <link rel="alternate icon" type="image/ico" href="/W3CAY/Public/Home/IMG/favicon.ico">
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
    <a href="http://localhost/W3CAY/" class="title">
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
            <li ><a href="http://localhost/W3CAY/">首页</a></li>
            <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li ><a href="/W3CAY/topic/<?php echo ($v["c_value"]); ?>"><?php echo ($v["c_name"]); ?></a></li><?php endforeach; endif; ?>
            <li ><a href="/W3CAY/me" target="_blank">关于我</a></li>
        </ul></nav>
    </header>
    <link rel="stylesheet" type="text/css" href="/W3CAY/Public/Home/CSS/theme.css" />
    <div class="theme-container">
    <div class="topic-container">
        <?php if(is_array($article)): foreach($article as $key=>$v): ?><div class="alist">
            <div  class="alist-title"><a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html">
            <span class="time">[<?php echo ($v["a_time"]); ?>]</span>	<h3><?php echo ($v["a_title"]); ?></h3></a></div>
            <a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html"><div class="alist-digest"><?php echo (msubstr($v["a_content"],0,180,'utf-8')); ?></div></a>
            <div class="alsit-attr">

            </div>
        </div><?php endforeach; endif; ?>
       
    </div>

        <div class="loadmore">加载更多</div>

   </div>
    <footer class="footer">
    <div class="footer-con">
         <span class="copyright">
            <a  href="http://w3cay.com" target="_blank">&copy; 安望云海|W3CAY</a>
            <a  href="http://www.miitbeian.gov.cn/" rel="nofollow"> &nbsp豫ICP备15003362&nbsp</a>
            </span>
        <span class="useread" >
            本站基于<a href="http://www.thinkphp.cn"  rel="nofollow" target="_blank">ThinkPHP</a>开发
            &nbsp
            托管于<a href="http://www.zzidc.com"  rel="nofollow" target="_blank">景安网络</a>
            </span>

    </div>
</footer>
</body>
<div style="display:none">
<script type="text/javascript">
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254403531'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1254403531' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>

</html>

<script type="text/javascript">
    $(function () {
        var listnum=0;
        $(".loadmore").bind("click",function(){
               
                listnum+=10;
                var num='listnum='+listnum;
                $.ajax({
                        type:'get',
                        cache:false,
                        data:num,
                                    url: "/W3CAY/index.php/Home/Index/more_theme?c_value=<?php echo ($c_value); ?>",
                        success: function(msg){
                        $(".topic-container").append(msg);
                       },
                        beforeSend: function(){
                        $(".loadmore").text("加载中...");
                        },
                        complete: function(){
                        $(".loadmore").text("加载更多");
                        },
                    });
    });
    })
</script>