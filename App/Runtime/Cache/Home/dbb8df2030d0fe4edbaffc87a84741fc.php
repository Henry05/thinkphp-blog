<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>FeedPlus - 安望云海</title>
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


        
<?php if(is_array($rss)): foreach($rss as $key=>$v): ?><div class="alist" >

            <span>[<?php echo ($v["pubdate"]); echo ($v["updated"]); ?>]</span>
         <a href="<?php echo ($v["link"]); ?>" target="_blank"><span ><?php echo ($v["title"]); ?></sapn></a>
</div><?php endforeach; endif; ?>
</body>
</html>