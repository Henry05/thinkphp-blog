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

    </head>
    
<!--   导航栏样式表 -->
  <link rel="stylesheet" href="/W3CAY/Public/Home/CSS/layout.css"/>

<!--[if lt IE 9]>
<script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/Jquery/jquery-2.1.3.js"></script>
<!--<![endif]-->
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


    <!--   首页样式表 -->

    <link rel="stylesheet" href="/W3CAY/Public/Home/CSS/home.css"/>

    <script type="text/javascript">
            //简要渐入效果
            $(function(){
            $('.ban-slogan').fadeIn(2000);
            $(".ban-pic").animate(
                {left:'0px'},600);
            });
    </script>
    <!-- Banner部分 -->
    <div class="ban">
        <div class="ban-con">
            <div class="ban-pic"></div>
            <div class="ban-slogan" >
                <h2>{ 致力于HTML/CSS/JS/WEB开发 }</h2>
                <p>
                不愿成为知识的过客，记录和分享我的WEB开发经验与技巧；发挥共享的力量，用技术创造我们心中的互联网世界！
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
                <div class="alist-icon" style="background: url('/W3CAY/Public/Home/IMG/<?php echo ($v["c_value"]); ?>.png') no-repeat;"></div>
                <div class="alist-con">
                    <div  class="alist-title">
                        <a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html">
                        <span>[<?php echo ($v["a_time"]); ?>]</span>
                        <h3 ><?php echo ($v["a_title"]); ?></h3>
                    </a></div>
                    <a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html"><div class="alist-digest"><?php echo (msubstr($v["a_content"],0,120,'utf-8')); ?></div></a>
                </div>
            </div><?php endforeach; endif; ?>
        </div>
        <!-- 最热 -->
        <div class="hotlist">
            <?php if(is_array($hot)): foreach($hot as $key=>$v): ?><div class="alist">
                <div class="alist-icon"  style="background: url('/W3CAY/Public/Home/IMG/<?php echo ($v["c_value"]); ?>.png') no-repeat;"></div>
                <div class="alist-con" >
                    <div  class="alist-title">
                        <a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html">
                        <span>[<?php echo ($v["a_time"]); ?>]</span>
                        <h3 ><?php echo ($v["a_title"]); ?></h3>
                    </a></div>
                    <a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html"><div class="alist-digest"><?php echo (msubstr($v["a_content"],0,120,'utf-8')); ?></div></a>
                </div>
            </div><?php endforeach; endif; ?>
        </div>
        <div class="lastShow"  ></div>
        <div class="hotShow"  ></div>
        <div class="showload"  ></div>
    </div>


<ul class="show">  </ul>
<footer class="footer">
    <div class="footer-con">
      <a  href="http://localhost/W3CAY/me" alt="关于我" title="关于我" target="_blank">
        <div class="me">
            <i class="myicon"><img  src="/W3CAY/Public/Home/IMG/myicon.png" alt="关于我" title="关于我" width="60"  height="60" /> </i>
            <div class="mylink"></div>
            <span class="mymoto"></span>
            </a>
        </div>
        <div class="footer-left">
            <div id="line"></div>

            <span class="useread" >
            Powered by <a href="http://www.thinkphp.cn"  rel="nofollow" target="_blank">ThinkPHP</a>
            &nbsp
            Host by
            <a href="http://www.zzidc.com"  rel="nofollow" target="_blank">景安网络</a>
            </span>
            <span class="copyright">
            <i class="copy-icon"></i> 
        <a  href="http://w3cay.com" target="_blank">安望云海|W3CAY</a> 
        <a  href="http://www.miitbeian.gov.cn/" rel="nofollow"> &nbsp豫ICP备15003362号&nbsp</a>
            <script type="text/javascript">
            var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254403531'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1254403531' type='text/javascript'%3E%3C/script%3E"));
            </script>
            </span>
        </div>
    </div>
<!--       <div class="totop"></div>-->
 </footer>
</body>
<script type="text/javascript">
    $(function () {
        $("#cnzz_stat_icon_1254403531 a").text('');
    });
</script>
</html>
<script type="text/javascript">


    $("#hot").click(function(){
    $(this).removeClass("off").addClass("on").css("background","#C5F0A8");
    $("#last").removeClass("on").addClass("off");
    $(".lastlist").css("display","none");
    $(".hotlist").css("display","block");
    $(".content").css("background","#C5F0A8");
    $(".ban").css("background","#FACE6A");
    $(".lastShow").css("display","none");
    $(".hotShow").css("display","block");
    });
    $("#last").click(function(){
    $(this).removeClass("off").addClass("on");
    $("#hot").removeClass("on").addClass("off").css("background","#F3F3F3");
    $(".hotlist").css("display","none");
    $(".lastlist").css("display","block");
    $(".content").css("background","#CDE2F8");
    $(".ban").css("background","#C7C7F3");
    $(".lastShow").css("display","block");
    $(".hotShow").css("display","none");
    });
$(function(){
        var firstnum=0;
        var hotnum=0;
        $(".lastShow").bind("click",function(){
                
                firstnum+=10;
                var num='firstnum='+firstnum;
                $.ajax({
                        type:'get',
                        cache:false,
                        data:num,
                                    url: "/W3CAY/index.php/Home/Index/return_last",
                        success: function(msg){
                        $(".lastlist").append(msg);},
                        beforeSend: function(){
                        $(".lastShow").css("display","none");
                        $(".showload").css("display","block");
                        },
                        complete: function(){
                        $(".lastShow").css("display","block");
                        $(".showload").css("display","none");
                        },
                    });
    });
            $(".hotShow").bind("click",function(){
                
                hotnum+=10;
                var num='hotnum='+hotnum;
                $.ajax({
                        type:'get',
                        cache:false,
                        data:num,
                                    url: "/W3CAY/index.php/Home/Index/return_hot",
                        success: function(msg){
                        $(".hotlist").append(msg);},
                        beforeSend: function(){
                        $(".hotShow").css("display","none");
                        $(".showload").css("display","block");
                        },
                        complete: function(){
                        $(".hotShow").css("display","block");
                        $(".showload").css("display","none");
                        },
                    });
    });
});

</script>