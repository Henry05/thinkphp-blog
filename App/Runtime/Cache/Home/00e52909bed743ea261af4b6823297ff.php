<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>安望云海-致力于HTML/CSS/JS/WEB开发</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/ico" href="/W3CAY/Public/IMG/favicon.ico">
  <link rel="stylesheet" href="/W3CAY/Public/AmazeUI/assets/css/amazeui.min.css"/>
<!--   导航栏样式表 -->
  <link rel="stylesheet" href="/W3CAY/Public/CSS/navbar.css"/>
<!--   首页样式表 -->
   <link rel="stylesheet" href="/W3CAY/Public/CSS/home.css"/>
</head>
<body>
<header class="am-topbar am-topbar-inverse">
  <h1 class="am-topbar-brand">
  <a href="http://www.w3cay.com">
   <i class="logo"><img src="/W3CAY/Public/IMG/logo.png" width="45px" height="45px"></i>
    <i class="name"></i>
  </a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse am-topbar-right" id="doc-topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li class="am-active"><a href="#">首页</a></li>    
    
          <li ><a href="#">Html</a></li>
          <li ><a href="#">CSS</a></li>
          <li><a href="#">Javascripts</a></li>
          <li><a href="#">SEO</a></li>
          <li><a href="#">PHP</a></li>
          <li><a href="#">MYSQL</a></li>
       <li><a href="#">杂谈</a></li>
       <li><a href="#">资源</a></li>
       <li><a href="#">关于我</a></li>
    </ul>

    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
      </div>
    </form>

<!--     <div class="am-topbar-right">
      <div class="am-dropdown" data-am-dropdown="{boundary: '.am-topbar'}">
        <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm am-dropdown-toggle" data-am-dropdown-toggle>其他 <span class="am-icon-caret-down"></span></button>
        <ul class="am-dropdown-content">
          <li><a href="#">注册</a></li>
          <li><a href="#">随便看看</a></li>
        </ul>
      </div>
    </div> -->

<!--     <div class="am-topbar-right">
      <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">登录</button>
    </div> -->
  </div>
</header>

<!-- <div class="banner"> -->
<!-- <img src="/W3CAY/Public/IMG/HOMEP.png"> -->
</div>
  <div class="hope">
  <div class="am-g am-container">
    <div class="am-u-lg-4 am-u-md-6 am-u-sm-12 hope-img">
      <img src="/W3CAY/Public/AmazeUI/assets/i/examples/landing.png" alt="" data-am-scrollspy="{animation:'slide-left', repeat: false}">
      <hr class="am-article-divider am-show-sm-only hope-hr">
    </div>
    <div class="am-u-lg-8 am-u-md-6 am-u-sm-12" id="slogan">
      <h2 class="hope-title">{ 致力于Html/Css/Js/WEB开发 }</h2>

      <p>
        在知识爆炸的年代，我们不愿成为知识的过客，拥抱开源文化，发挥社区的力量，参与到Amaze Ui开源项目能获得自我提升。
      </p>
    </div>
  </div>
</div>

<div class="detail">
<!-- 响应式方格 -->
  <div class="am-g am-container">

    <div class="am-u-lg-12">
     <!--  <h2 class="detail-h2">One Web 、Any Device，期待和你一起去实现!</h2> -->

      <div class="am-g">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">

          <h3 class="detail-h3">
            <i class="am-icon-mobile am-icon-sm"></i>
            为移动而生
          </h3>

          <p class="detail-p">
            Amaze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-cogs am-icon-sm"></i>
            组件丰富，模块化
          </h3>

          <p class="detail-p">
            Amaze UI 含近 20 个 CSS 组件、10 个 JS 组件，更有 17 款包含近 60 个主题的 Widgets，可快速构建界面出色、体验优秀的跨屏页面，大幅度提升你的开发效率。
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-check-square-o am-icon-sm"></i>
            本地化支持
          </h3>

          <p class="detail-p">
            相比国外的前端框架，Amaze UI 专注解决中文排版优化问题，根据操作系统调整字体，实现最佳中文排版效果；针对国内主流浏览器及 App 内置浏览器提供更好的兼容性支持，为你节省大量兼容性调试时间。
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-send-o am-icon-sm"></i>
            轻量级，高性能
          </h3>

          <p class="detail-p">
            Amaze UI 非常注重性能，基于轻量的 Zepto.js 开发，并使用 CSS3 来做动画交互，平滑、高效，更适合移动设备，让你的 Web 应用可以高速载入。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>





<footer class="footer">
  <p>© 2015 <a href="http://www.w3cay.com" target="_blank">安望云海|W3CAY</a> 
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/W3CAY/Public/AmazeUI/assets/js/polyfill/rem.min.js"></script>
<script src="/W3CAY/Public/AmazeUI/assets/js/polyfill/respond.min.js"></script>
<script src="/W3CAY/Public/AmazeUI/assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/AmazeUI/assets/js/jquery.min.js"></script>
<script src="/W3CAY/Public/AmazeUI/assets/js/amazeui.min.js"></script>
<!--<![endif]-->

<script src="/W3CAY/Public/Js/home.js"></script>
</body>
</html>