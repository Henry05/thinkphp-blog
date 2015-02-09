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
    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li ><a href="/W3CAY/<?php echo ($v["c_value"]); ?>"><?php echo ($v["c_name"]); ?></a></li><?php endforeach; endif; ?>
        <li>
          <form class="search" role="search"> 
          <input type="text" class="search-input" placeholder="Search">
          </form>
        </li>
   </ul></nav>
 </header>
<!--   首页样式表 -->
<<<<<<< HEAD
<link rel="stylesheet" href="/W3CAY/Public/Home/CSS/home.css"/>



=======
   <link rel="stylesheet" href="/W3CAY/Public/Home/CSS/home.css"/>
>>>>>>> parent of c70679e... 修改首页样式
<!-- Banner部分 -->
<div class="ban">
  <div class="ban-con">
    <div class="ban-pic"></div>
    <div class="ban-slogan" >
      <h2>{ 致力于Html/Css/Js/WEB开发 }</h2>
      <p>
        不愿成为知识的过客，记录和分享我的WEB开发经验与技巧，发挥共享的力量，只为创造出激动人心的网页！
      </p>
    </div>
  </div>
</div>
<!-- 内容部分 -->
<div class="content">
  
   <!-- 大于1180px部分 -->
  <div class="con-4">

    <div class="sec-box">
        <div class="list-block">

          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>

          <p class="block-title">
           Amaze UI 采用业内先进的 mobile first
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="ablock-icon"></i>
           PHP
          </span>

          <p class="block-title">
           Amaze UI 含近 20 个 CSS 组件、10 个 JS 组件
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            PHP
          </span>

          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
           解决中文排版优化问题解决中文排版优化问题
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
          Html
          </span>

          <p class="block-title">
          Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发
          </p>
        </div>
    </div>

        <div class="sec-box">
        <div class="list-block">

          <span class="block-type">
            <i class="block-icon"></i>
          Html
          </span>

          <p class="block-title">
           Amaze UI 采用业内先进的 mobile first
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Javascript
          </span>

          <p class="block-title">
           Amaze UI 含近 20 个 CSS 组件、10 个 JS 组件
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>

          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
         Javascript
          </span>

          <p class="block-title">
          Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发
          </p>
        </div>
    </div>
        <div class="sec-box">
        <div class="list-block">

          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>

          <p class="block-title">
           Amaze UI 采用业内先进的 mobile first
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="ablock-icon"></i>
            Javascript
          </span>

          <p class="block-title">
           Amaze UI 含近 20 个 CSS 组件、10 个 JS 组件
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            PHP
          </span>

          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
         Javascript
          </span>

          <p class="block-title">
          Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发
          </p>
        </div>
    </div>
  </div>

   <!-- 小于1180px部分 -->
  <div class="con-3">

    <div class="sec-box">

        <div class="list-block">
          <span class="block-type">
            <i class="ablock-icon"></i>
           PHP
          </span>

          <p class="block-title">
           Amaze UI 含近 20 个 CSS 组件、10 个 JS 组件
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            PHP
          </span>

          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
           解决中文排版优化问题解决中文排版优化问题
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
          Html
          </span>

          <p class="block-title">
          Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发
          </p>
        </div>
    </div>
<<<<<<< HEAD
    <!--   最新 -->
    <div class="lastlist">
     <!--    <?php if(is_array($last)): foreach($last as $key=>$v): ?><div class="alist"  >
            <div class="alist-icon" style="background: url('/W3CAY/Public/Home/IMG/<?php echo ($v["c_value"]); ?>.png') no-repeat;background-size:100px 100px;"></div>
            <div class="alist-con">
                <div  class="alist-title">
                    <a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html">

                    <span>[<?php echo ($v["a_time"]); ?>]</span>
                    <h3 ><?php echo ($v["a_title"]); ?></h3>
                </a></div>
                <a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html"><div class="alist-digest"><?php echo (msubstr($v["a_content"],0,200,'utf-8')); ?></div></a>
            </div>
        </div><?php endforeach; endif; ?> -->
   <div class="last"> 
    <div id="more">
      <div class="single_item">
      <div class="alist-icon" style="background: url('/W3CAY/Public/Home/IMG/<?php echo ($v["c_value"]); ?>.png') no-repeat;background-size:100px 100px;"></div>
      <div class="alist-con" >
      <span>
         <div class="a_time"> </div>
         <div class="a_title"></div>
      </span>
        
         <div class="a_content"></div>
      </div>
        </div>
       <a href="javascript:;" class="get_more">::点击加载更多内容::</a>
  </div> 
 </div>
</div>

    <!-- 最热 -->
    <div class="hotlist">
        <div id="more">
      <div class="single_item">
      <div class="alist-icon" style="background: url('/W3CAY/Public/Home/IMG/<?php echo ($v["c_value"]); ?>.png') no-repeat;background-size:100px 100px;"></div>
      <div class="alist-con" >
      <span>
         <div class="a_time"> </div>
         <div class="a_title"></div>
      </span>
        
         <div class="a_content"></div>
      </div>
        </div>
       <a href="javascript:;" class="get_more">::点击加载更多内容::</a>
  </div> 

=======

        <div class="sec-box">
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Javascript
          </span>

          <p class="block-title">
           Amaze UI 含近 20 个 CSS 组件、10 个 JS 组件
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>

          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
         Javascript
          </span>

          <p class="block-title">
          Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发
          </p>
        </div>
    </div>
        <div class="sec-box">
        <div class="list-block">
          <span class="block-type">
            <i class="ablock-icon"></i>
            Javascript
          </span>

          <p class="block-title">
           Amaze UI 含近 20 个 CSS 组件、10 个 JS 组件
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            PHP
          </span>

          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
         Javascript
          </span>

          <p class="block-title">
          Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发
          </p>
        </div>
>>>>>>> parent of c70679e... 修改首页样式
    </div>
  </div>

   <!-- 小于990px部分 -->
  <div class="con-2">
    <div class="sec-box">
       
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>

          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
         Javascript
          </span>

          <p class="block-title">
          Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发
          </p>
        </div>
    </div>
     <div class="sec-box">
       
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>

          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
         Javascript
          </span>

          <p class="block-title">
          Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发
          </p>
        </div>
    </div>
     <div class="sec-box">
     
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            PHP
          </span>

          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
         Javascript
          </span>

          <p class="block-title">
          Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发
          </p>
        </div>
    </div>
  </div>

    <!-- 小于685px部分 -->
  <div class="con-1">
        <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>
          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
                <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>
          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
                <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>
          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
                <div class="list-block">
          <span class="block-type">
            <i class="block-icon"></i>
            Html
          </span>
          <p class="block-title">
           相比国外的前端框架，Amaze UI 专注解决中文排版优化问题
          </p>
        </div>
  </div>

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
<script src="/W3CAY/Public/Jquery/jquery.more.js"></script>
</body>
<<<<<<< HEAD
</html>
<script type="text/javascript">

    $("#hot").click(function(){
     $(this).removeClass("off").addClass("on").css("background","#C5F0A8");
     $("#last").removeClass("on").addClass("off");
     $(".lastlist").css("display","none");
     $(".hotlist").css("display","block");
     $(".content").css("background","#C5F0A8");
    $(".ban").css("background","#E3BE66");
    });

    $("#last").click(function(){
     $(this).removeClass("off").addClass("on");
     $("#hot").removeClass("on").addClass("off").css("background","#F3F3F3");;
      $(".hotlist").css("display","none");
     $(".lastlist").css("display","block");
     $(".content").css("background","#CDE2F8");
    $(".ban").css("background","#C7C7F3");
    });


   $(function(){
    $('#more').more({'address': '/W3CAY/index.php/Home/Index/returnlist'})
  });

</script>
=======
</html>
>>>>>>> parent of c70679e... 修改首页样式
