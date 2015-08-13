<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>安望云海-致力于HTML/CSS/JS/前端开发</title>
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
             <li ><a href="/Blog/message">留言</a></li>
            <li ><a href="/Blog/me" target="_blank">关于我</a></li>
        </ul></nav>
    </header>
    <!--   首页样式表 -->
    <link rel="stylesheet" href="/Blog/Public/Home/CSS/home.css"/>
    <!-- Banner部分 -->
    <div class="ban">
        <div class="ban-con">
            <div class="ban-pic"></div>
            <div class="ban-slogan" >
                <h2>{ 致力于HTML/CSS/JS/前端开发 }</h2>
                <p>
                不愿成为知识的过客，记录和分享前端开发学习中的点点滴滴；用编程与艺术的完美结合，创造我心中的互联网世界！
                </p>
            </div>
        </div>
    </div>
    <!-- 内容部分 -->
    <div class="content">
        <div class="tab">
            <a id="last" class="tab-box on" href="javascript:void(0)" >最新</a>
            <a id="hot" class="tab-box off" href="javascript:void(0)" >最热</a>
        </div>
        <!--   最新 -->
        <div class="lastlist">
            <?php if(is_array($last)): foreach($last as $key=>$v): ?><div class="alist"  >
                <div class="alist-icon" >
                   <a href="/Blog/topic/<?php echo ($v["c_value"]); ?>"> <img src="/Blog/Public/Home/IMG/<?php echo ($v["c_value"]); ?>.png"></a>
                </div>
                <div class="alist-con">
                    <div  class="alist-title">
                         <a href="/Blog/article/<?php echo ($v["a_id"]); ?>.html">
                        <span>[<?php echo ($v["a_time"]); ?>]</span>
                        <h3 ><?php echo ($v["a_title"]); ?></h3>
                    </a></div>
                    <a href="/Blog/article/<?php echo ($v["a_id"]); ?>.html"><div class="alist-digest"><?php echo (msubstr($v["a_content"],0,135,'utf-8')); ?></div></a>
                </div>
            </div><?php endforeach; endif; ?>
        </div>
        <!-- 最热 -->

        <div class="hotlist">
            <?php if(is_array($hot)): foreach($hot as $key=>$v): ?><div class="alist">
                 <div class="alist-icon" >
                   <a href="/Blog/topic/<?php echo ($v["c_value"]); ?>"> <img src="/Blog/Public/Home/IMG/<?php echo ($v["c_value"]); ?>.png"></a>
                </div>
                <div class="alist-con" >
                     <div  class="alist-title">
                         <a href="/Blog/article/<?php echo ($v["a_id"]); ?>.html">
                        <span>[<?php echo ($v["a_time"]); ?>]</span>
                        <h3 ><?php echo ($v["a_title"]); ?></h3>
                    </a></div>
                    <a href="/Blog/article/<?php echo ($v["a_id"]); ?>.html"><div class="alist-digest"><?php echo (msubstr($v["a_content"],0,135,'utf-8')); ?></div></a>
                </div>
            </div><?php endforeach; endif; ?>
        </div>
        <div class="lastShow next-show">
            <span class="more-icon "></span>
        </div>
        <div class="hotShow next-show">            
            <span class="more-icon"></span>
        </div>
       
    </div>


<ul class="show">  </ul>
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
<script type="text/javascript">
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254403531'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1254403531' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>

</html>

<script type="text/javascript">
    //简要渐入效果
    $(function(){

    $(".ban-pic").animate(
        {left:'0px',opacity:'1'},600);
    });
    $('.ban-slogan').fadeIn(2000);

    $("#hot").click(function(){
    $(this).removeClass("off").addClass("on");
    $("#last").removeClass("on").addClass("off");
    $(".lastlist").css("display","none");
    $(".hotlist").css("display","block");

    $(".lastShow").css("display","none");
    $(".hotShow").css("display","block");
    });

    $("#last").click(function(){
    $(this).removeClass("off").addClass("on");
    $("#hot").removeClass("on").addClass("off");
    $(".hotlist").css("display","none");
    $(".lastlist").css("display","block");

    $(".lastShow").css("display","block");
    $(".hotShow").css("display","none");
    });
$(function(){
        var lastnum=0;
        var hotnum=0;
        function ajaxshow(start,list,show){
         $.ajax({
                    type:'get',
                    cache:false,
                    data:num,
                    url: "/Blog/index.php/Home/Index/return_list/?c_value=<?php echo ($c_value); ?>",
                    success: function(msg){
                     list.append(msg);},
                    beforeSend: function(){
                    show.addClass("onload");
                    },
                    complete: function(){
                     show.removeClass("onload");

                    },
                });
        }
        $(".lastShow").bind("click",function(){
               lastnum+=10;
               num='firstnum='+lastnum;
               var list=$(".lastlist");
               var show = $(".lastShow span");
               ajaxshow(lastnum,list,show) ;
         });
            $(".hotShow").bind("click",function(){
               hotnum+=10;
               num='hotnum='+hotnum;
               var list=$(".hotlist");
               var show = $(".hotShow span");
               ajaxshow(hotnum,list,show) ;
          });
});

</script>