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
    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li ><a href="#"><?php echo ($v["c_name"]); ?></a></li><?php endforeach; endif; ?>
        <li>
          <form class="search" role="search"> 
          <input type="text" class="search-input" placeholder="Search">
          </form>
        </li>
   </ul></nav>
 </header>
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Home/CSS/article.css" />
<div class="article-container">
	<div class="article">	
	<div  class="article-title"><h4>2015年的API将成为这五方面的主力</h4></div>
	<div class="article-detail">
Web API为今天的企业和负责构建推进事物前进技术的人们开放了许多新的远景。多年来，API一直是开发者用于构建和连接应用工具包中的一部分。现在Web API、或者可以通过互联网调用服务的接口将是一个新兴的场景——从物联网到数据分析到终端用户跟踪集成。SOA软件公司的Roberto Medrano已经发布了他对API将在15年做什么的想法：
	1. API将致力于IOT
Mendrano说：“从核心处讲，IOT无非是一个API-enabled平台，向用于为用户提供价值的事物扩展数据。可以说没有API，就不会有IOT，每一个植入设备的数据块都会携有一个API。”除此之外，API还为IOT提供了分类，使数据交易于设备层面，而无需等待后端处理。

2. API将促使规模更大的云集成
在互联网时代，云计算和SaaS应用需要被集成，而API则能够灵活并快速的实现这种集成。Mendrano说：“在15年，将会更强调识别、整合、策划和管理API，这将有助于整合应用和数据。”

3. API将提供更强大的数据分析
在15年，API不仅限于数据的传输和通信，它将提供分析来帮助人们理解这些数据是如何被使用的。Mendrano预测：“API将提供大量关于客户行为的数据和见解。”其中见解包含谁在使用数据、如何使用的以及修改和变更是何时被要求的。

4. API将为创新敞开大门
API将以两种方式推动创新：首先，企业通过API开放他们的数据来释放伙伴和第三方开发者的创造力。第二，API-enabled服务和产品将为开发者提供工具，使他们专注于构建新的、创造性的、可用的事物。在某种程度上，他们不需要分心于管理后端和服务端的任务。这些内置的功能包括安全和编配能力。

5. API将提升microservices（微服务）的使用
API是高度组件化的规则，这很自然的分解企业应用走向microservices。关于微服务，可以点此查看更详细的介绍（点击进入）。

原文来自：ZDnet

	</div>
	<div class="article-attr">
	<span>2015-2-5</span>	
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
</body>
</html>