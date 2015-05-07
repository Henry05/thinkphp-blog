<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>安望云海</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp"/>
        <link rel="alternate icon" type="image/ico" href="/W3CAY/Public/Home/IMG/favicon.ico">
        <link rel="stylesheet" href="/W3CAY/Public/Home/CSS/aboutme.css">
        <link rel="stylesheet" href="/W3CAY/Public/Home/CSS/layout.css"/>
    </head>
    <body >
        <div class="container">
            <i class="next-icon" id="next-icon-id"></i>
            <section class="first ">
                <div class="icon-me"><img src="/W3CAY/Public/Home/IMG/myicon.png"> </div>
                <div class="first-name">Bright Chen</div>
            </section>
            <section class="second" id="page2">
            <h3>—— Introduce ——</h3>
            <div class="sec-text ">

            <div class="text-box ">
           
             <p class="p-big"> I'm a web front-end development enthusiasts</p>
             <p class="p-sm"><img class="text-icon" src="/W3CAY/Public/Home/IMG/pc.png" >我是一名web前端技术爱好者</p>
             </div>
            
             <div class="text-box">
             <p class="p-big"> Studying in Henan University of science and technology</p>
             <p class="p-sm"><img class="text-icon" src="/W3CAY/Public/Home/IMG/university.png" >现就读于河南大学计算机科学与技术专业</p>
             </div>
            </div>
            </section>
            <section class="third" id="page3">
                <h3>—— Skills ——</h3>
          <div class="sec-text ">
            <div class="text-line"> 
            <span class="skills">HTML+</span>
            <span class="pre-bar">
                <span class="precent pre1"></span>
            </span>
            </div>
            <div class="text-line"> 
            <span class="skills">CSS+</span>
            <span class="pre-bar">
                <span class="precent  pre2"></span>
            </span>
            </div>
            <div class="text-line"> 
            <span class="skills">Jquery</span>
            <span class="pre-bar">
                <span class="precent pre3"></span>
            </span>
            </div>
            <div class="text-line"> 
            <span class="skills">JS</span>
            <span class="pre-bar">
                <span class="precent pre4"></span>
            </span>
            </div>
            <div class="text-line"> 
            <span class="skills">PS</span>
            <span class="pre-bar">
                <span class="precent pre5"></span>
            </span>
            </div>
             
            </div>
            </section>
            <section class="forth" id="page4">
                 <h3>—— Contact ——</h3>
                 <div class="mes-contain">
                  <div class="contact-icon">
                      <a href="http://weibo.com/633012550/" target="_blank" >
                      <img id="weibo" class="img-hover" src="/W3CAY/Public/Home/IMG/weibo.png" alt="我的微博" title="我的微博"></a>
                      <a href="javascript:void(0);"><img  id="weixin"  class="img-hover"  src="/W3CAY/Public/Home/IMG/weixin.png"></a>
                  </div>
                  <div class="weixin-code">
                      <img src="/W3CAY/Public/Home/IMG/weixin-code.jpg">
                      <span>扫一扫　联系我</span>
                  </div>
                     <div class="mes-post">
                     <span class="post-text">
                         <textarea  class="inp inp-text" />给我留言吧！</textarea>
                     </span>
                     <span class="post-from">
                         <input type="text" value="你的名字"  class="inp inp-name">
                         <input type="text" value="你的邮箱"  class="inp inp-mail">
                     </span>
                         <input class="inp inp-sub" type="button" value="Send"/>
                    
                    
                     </div>
                    
             </section>
        </div>
    </body>
    <!--[if lt IE 9]>
    <script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="/W3CAY/Public/Jquery/jquery-2.1.3.js"></script>
    <!--<![endif]-->
    <script  src="/W3CAY/Public/Home/JS/jquery.scrollify.min.js"></script>
    <script src="http://cdn.staticfile.org/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="http://cdn.dowebok.com/107/js/jquery.scrollify.min.js"></script>
    <script type="text/javascript">
                $(function() {
                // $('section').css({'height': $(window).height()});
                $.scrollify({
                    section: 'section',
                    scrollbars: false,
                });
                });
    </script>
    <script type="text/javascript"> 
    window.onscroll = function()
    { 
        var t = document.documentElement.scrollTop || document.body.scrollTop;  
        var h = document.body.scrollHeight;
        var next = document.getElementById( "next-icon-id" ); 

        if(t >= h*0.25){
            $(".p-sm").animate({left:'0'});
         }
        if(t >= h*0.5){
           $(".pre1").animate({ width:'70%'},"slow");
            $(".pre2").animate({ width:'60%'},"slow");
             $(".pre3").animate({ width:'50%'},"slow");
              $(".pre4").animate({ width:'30%'},"slow");
                $(".pre5").animate({ width:'50%'},"slow");
         }
        if( t >= h*0.7) { 
            next.style.visibility = "hidden"; 
        } 
        if( t <= h*0.7){
             next.style.visibility = "visible"; 
        }
    } 

    $(function(){

         //文本渐入
        $(".first-name").fadeIn("10000");

        //微信图标切换
        $("#weixin").click(function(){
            $(".mes-post").fadeToggle("slow");
            $(".weixin-code").fadeToggle("slow");
        });
       $("#weixin").hover(function(){
            $(".mes-post").fadeToggle("slow");
            $(".weixin-code").fadeToggle("slow");
        });

       //表单焦点文本切换
       $(".inp-name").focus(function() {
           $(this).val('');
       }).blur(function () {
           $(this).val("你的名字");
       });
        $(".inp-mail").focus(function() {
           $(this).val('');
       }).blur(function () {
           $(this).val("你的邮箱");
       });
      $(".inp-text").focus(function() {
           $(this).val('');
       }).blur(function () {
           $(this).val("给我留言吧！");
       });

    });
</script> 
</html>