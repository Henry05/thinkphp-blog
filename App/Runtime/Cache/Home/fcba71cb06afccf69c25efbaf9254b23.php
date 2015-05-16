<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head lang="en">
        <meta charset="UTF-8">
        <title>安望云海-致力于HTML/CSS/JS/WEB开发</title>
        <meta name="Keywords" content="web开发,html,css,js" />
        <meta name="Description" content="不愿成为知识的过客，记录和分享我的WEB开发经验与技巧，发挥共享的力量，只为创造出精彩的互联网世界！"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp"/>
        <link rel="alternate icon" type="image/ico" href="/W3CAY/Public/Home/IMG/favicon.ico">
        <style type="text/css">
        body{
        	background: #C7C7F3;
        	color: #fff;
        }
        .box{
        	width: 50%;
        	height: 50%;
        	text-align: center;
        	position: absolute;
        	top:50%;
        	left: 50%;
        	transform:translate(-50%,-50%);
			-ms-transform:translate(-50%,-50%);
			-webkit-transform:translate(-50%,-50%);
        }
        .big-font{
        	font-size:15em;
        	font-weight: bold;
        }
        .small-font{
        	font-size: 18px;
        }
        .cloud-div{
        	position: absolute;
        	height: 50%;
        	width: 100%;
        	overflow: hidden;
        	bottom: 0px;
        }
        .cloud{
        	height: 100%;
        	width: 150%;
        	position: relative;
        	left: -100px;
        	top:50px;
        	
        }
        .circle{
        	display: inline-block;
        	background: #fff;
        	border-radius: 300px;
        	position: relative;
        }
        .cir1{     	
        	width: 300px;
        	height: 300px;
        	bottom: -45%;
        	margin-left: -50px;
        }
        .cir2{
        	width:150px;
        	height:150px;
        	left: -50px;
        	top:20px;
        }
        .cir3{
        	width: 150px;
        	height:150px;
        	left: -100px;
        }
        .cir4{
        	width: 150px;
        	height: 150px;
        	left: -350px;
        	top:-80px;
        }
        </style>
    </head>

<body>
    
<!--   导航栏样式表 -->
  <link rel="stylesheet" href="/W3CAY/Public/Home/CSS/layout.css"/>

<!--[if lt IE 9]>
<script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/Jquery/jquery-2.1.3.js"></script>
<!--<![endif]-->
<script src="/W3CAY/Public/Home/JS/html5shiv.min.js"></script>
<script type="text/javascript">
//导航下拉效果
 $(function(){
$(".btn").click(function(){
    $(".nav").slideToggle("slow");
});
});
</script>
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
      <li ><a href="/W3CAY/me" target="_blank">关于我</a></li>
        <li>
          <form class="search" role="search"> 
          <input type="text" class="search-input" placeholder="Search">
          </form>
        </li>
   </ul></nav>
 </header>


   <div class="box">
   	<div><span class="big-font">404</span></div>
   	<div><span class="small-font">哎呀，找不到了！</span></div>
   </div>
   <div class="cloud-div">
   <div class="cloud ">
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>

	   	<span class="circle cir2"></span>
	   	<span class="circle cir3"></span>
	   	<span class="circle cir4"></span>

   </div>
   </div>
</body>
</html>