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
        	overflow: hidden;
        }
        .box{
        	width: 50%;

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
        	font-size: 20px;
        	font-weight: bold;
        }
        .cloud-div{
        	position: absolute;
        	height: 50%;
        	width: 100%;
        	bottom: 0px;
        }
        .cloud{
        	height: 300px;
        	width: 120%;
        	position: absolute;
        	bottom: -180px;
        	overflow: hidden;
        	
        }
        .circle{
        	display: inline-block;
        	background: #fff;
        	position: relative;
        }
        .cir1{  
            border-radius: 300px;   	
        	width: 300px;
        	height: 300px;
        	margin-left: -50px;
        	/*box-shadow: 5px 0px 20px  #C5B1B1;*/
        	z-index: 0;
        	top: 10px;
        }
        .cir2{
        	position: absolute;
        	width:400px;
        	height:400px;
        	border-radius: 400px; 
        	left:-120px;
        	bottom: -180px;
        	z-index: 10;

        }
        .cir3{
        	position: absolute;
        	width:400px;
        	height:400px;
        	border-radius: 400px; 
        	right:-150px;
        	bottom: -180px;
        	z-index: 10;
        }
   @media screen and (max-width: 1130px){
         .cir1{  
            border-radius: 250px;   	
        	width: 250px;
        	height: 250px;
        }
        .cir2{
        	width:370px;
        	height:370px;
        	border-radius: 370px; 
        }
        .cir3{
        	width:370px;
        	height:370px;
        	border-radius: 370px; 
        }
    }
     @media screen and (max-width: 800px){
         .cir1{  
            border-radius: 200px;   	
        	width: 200px;
        	height: 200px;
        	top: 25px;
        }
        .cir2{
        	width:320px;
        	height:320px;
        	border-radius: 320px; 
        }
        .cir3{
        	width:320px;
        	height:320px;
        	border-radius: 320px; 
        }
    }
     @media screen and (max-width: 680px){
     	.box{
     		width: 100%;
     	}
     	.big-font{
        	font-size:8em;
        	font-weight: bold;
        }
         .small-font{
        	font-size: 12px;
        	font-weight: 300;
        }
        .cir1{  
            border-radius: 100px;   	
        	width: 100px;
        	height: 100px;
        	top: 70px;
        	margin-left: -30px;
        }
        .cir2{
        	width:200px;
        	height:200px;
        	border-radius: 200px; 
        	bottom: -100px;
        }
        .cir3{
        	width:200px;
        	height:200px;
        	border-radius: 200px; 
        	bottom: -100px;
        	right: -130px;

        }
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
    <span class="circle cir2"></span>
   <div class="cloud ">
   		
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
		<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   	<span class="circle cir1"></span>
	   
   </div>
   <span class="circle cir3"></span>
   </div>
</body>
</html>