<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Bright Chen - 安望云海</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp"/>
        <link rel="stylesheet" href="/Blog/Public/Home/CSS/aboutme.css">
        <link rel="alternate icon" type="image/ico" href="/Blog/Public/Home/IMG/favicon.ico">
        <link rel="stylesheet" href="/Blog/Public/Home/CSS/layout.css"/>
    </head>
<body>
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
            <li ><a href="/Blog/me" >关于</a></li>
        </ul></nav>
    </header>
        <body >
            <div class="container">
                <section id="mebox">
                    <div id="cneter-box">
                        <img id="icon" src="/Blog/Public/Home/IMG/myicon.png">
                        <div id="intro">我叫Bright，来自大中原郑州，就读于河南大学计算机科学与技术专业。热爱WEB前端技术与网页设计，正在不断努力学习中！
                        </div>
                     <ul id="findme">
                          
                            <li>
                            <a href="http://weibo.com/633012550" title="微博">
                                 <svg version="1.1" id="图形" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="35px" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" xml:space="preserve">
                                <path fill="#fff" d="M730.47792 320.290115c0 0 129.105427 229.116211-244.296959 108.85829 46.810119 36.676317 39.247886 111.410416 2.514263 137.952932-136.705522 98.743932-470.802716-216.430284-470.802716-403.764903 0-113.905236 122.752742-262.011412 402.478608-262.011412 351.906815 0 461.994096 192.401008 461.994096 286.039665C882.365212 316.508999 730.47792 320.290115 730.47792 320.290115zM431.944709-49.389482c-163.92035-15.276938-305.192887 62.470797-315.500651 173.688831-10.422374 111.180172 114.058732 213.704197 278.017968 228.962715 163.92035 15.257495 305.192887-62.470797 315.53749-173.669388C720.345142 68.393062 595.902922-34.131987 431.944709-49.389482zM374.060371 273.019509c-88.763626-15.027252-150.274562-88.87926-137.377834-164.860768 12.858866-76.020394 95.212502-125.477806 183.976128-110.469997 88.724741 15.027252 150.2367 88.820931 137.377834 164.860768C545.138748 238.568882 462.823997 288.008898 374.060371 273.019509zM358.63096 56.167622c-28.67304-7.869225-57.80759 7.023974-65.080228 33.278941-7.196912 26.331715 10.191106 54.025451 38.826284 61.932538 28.67304 7.907087 57.80759-6.986111 65.041342-33.278941C404.653133 91.807331 387.302977 64.112572 358.63096 56.167622zM433.095929 140.574011c-14.739702 0-26.696012 11.918447-26.696012 26.65815 0 14.72026 11.95631 26.676569 26.696012 26.676569 14.739702 0 26.657126-11.975752 26.657126-26.676569C459.754079 152.492458 447.835631 140.574011 433.095929 140.574011zM950.689321 604.352753C891.769396 679.681392 797.343817 712.346349 684.878372 696.321374c-18.961864-2.687202-32.166607-20.24816-29.459962-39.228443 2.667759-18.922978 20.171412-32.070416 39.210024-29.421077 111.37153 15.890922 171.040515-27.13808 201.478757-66.059532 39.957037-51.14689 51.243081-124.039038 28.039613-181.327812-7.196912-17.752316 1.343601-37.981033 19.11536-45.159526 4.28049-1.727341 8.655124-2.552126 13.012362-2.552126 13.684674 0 26.657126 8.176217 32.127721 21.649066C1020.643556 433.772726 1005.500671 534.281861 950.689321 604.352753zM718.213595 570.478248c-18.885116-2.705622-32.088836-20.266579-29.383214-39.210024 2.705622-18.942421 20.171412-32.088836 39.210024-29.421077 31.858592 4.568039 56.67479-3.090385 71.567989-22.128997 13.414521-17.196661 17.388019-42.433438 9.749038-61.414745-7.196912-17.752316 1.382487-37.96159 19.11536-45.159526 4.317329-1.727341 8.655124-2.533706 13.012362-2.533706 13.684674 0 26.696012 8.176217 32.127721 21.649066 17.10047 42.145889 9.480932 93.235474-19.384489 130.161479C836.513932 545.106394 795.270599 581.495162 718.213595 570.478248z" transform="translate(0, 812) scale(1, -1)"/>
                            </svg>
                            </a>
                            </li>
                            <li>
                              <a href="http://www.zhihu.com/people/bright-chen" title="知乎">
                                  <svg version="1.1" id="图形" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" xml:space="preserve">
                                <path fill="#fff" d="M371.2 134.4l-56-62.4c5.6-1.6 12.8-9.6 24-24 42.4-51.2 82.4-104.8 125.6-155.2 18.4-20.8 19.2-24.8 22.4-16 13.6 43.2 27.2 83.2 15.2 101.6C472.8 12 400 100 371.2 134.4zM552 244c-5.6 32.8-22.4 72-56 72-40.8 0.8-71.2 0-112 0-16 0-31.2 4.8-28.8 27.2 5.6 63.2 0.8 126.4 7.2 188.8 2.4 25.6 12.8 33.6 36.8 32.8 31.2-0.8 88-0.8 119.2 0 36.8 0.8 45.6-10.4 7.2 54.4C514.4 639.2 498.4 636 480 636c-78.4 0-161.6 0.8-240 0-26.4 0-31.2 13.6-21.6 39.2 8.8 24.8 20 71.2 28 96.8 7.2 24 0 17.6 0 17.6-32.8-19.2-89.6-44-103.2-77.6-32.8-82.4-69.6-186.4-104-268.8-3.2-7.2-5.6-8 18.4-2.4 43.2 11.2 86.4 33.6 107.2 74.4 25.6 49.6 30.4 52.8 84.8 48 16.8-1.6 23.2-6.4 23.2-24-1.6-61.6-3.2-124-2.4-185.6 0-27.2-11.2-40-36.8-39.2-40.8 1.6-87.2-0.8-128 0-26.4 0.8-56-26.4-60-62.4C41.6 240 38.4 236 40 236c47.2 0.8 136.8-1.6 184 0 25.6 0.8 35.2-4.8 31.2-32-9.6-63.2-28-123.2-58.4-179.2C160-44 110.4-103.2 49.6-153.6c-7.2-5.6-17.6-12-15.2-23.2 3.2-12 16-10.4 24.8-10.4 57.6 2.4 113.6 8.8 154.4 57.6 41.6 48.8 66.4 106.4 88.8 165.6l27.2 89.6c4 22.4 11.2 44.8 12 67.2C344 229.6 359.2 236 392 236c42.4 0.8 116.8 0.8 160 0C561.6 236 552.8 235.2 552 244zM592 628l0-728 80 0 23.2-88 120.8 88 184 0L1000 628 592 628zM920-28l-80 0-112.8-72.8L704-28l-32 0L672 556l248 0L920-28z" transform="translate(0, 812) scale(1, -1)"/>
                            </svg>
                              </a>
                            </li>
                              <li>
                                <a href="https://github.com/w3cay" title="Github"> <svg version="1.1" id="图形" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="35px" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" xml:space="preserve">
                                <path fill="#272636" d="M402.304 147.809q0-22.857-7.131-46.848t-24.576-43.447-41.435-19.419-41.435 19.419-24.576 43.447-7.131 46.848 7.131 46.848 24.576 43.447 41.435 19.419 41.435-19.419 24.576-43.447 7.131-46.848zM768.018 147.809q0-22.857-7.131-46.848t-24.576-43.447-41.435-19.419-41.435 19.419-24.576 43.447-7.131 46.848 7.131 46.848 24.576 43.447 41.435 19.419 41.435-19.419 24.576-43.447 7.131-46.848zM859.447 147.809q0 68.571-39.424 116.553t-106.862 48.018q-23.442 0-111.433-11.995-40.558-6.29-89.71-6.29t-89.71 6.29q-86.857 11.995-111.433 11.995-67.438 0-106.862-48.018t-39.424-116.553q0-50.286 18.286-87.698t46.299-58.843 69.705-34.304 80.018-16.859 85.138-3.986h96q46.848 0 85.138 3.986t80.018 16.859 69.705 34.304 46.299 58.843 18.286 87.698zM987.447 248.381q0-118.272-34.853-189.147-21.723-43.995-60.27-75.995t-80.567-49.152-97.134-27.136-98.011-12.581-95.415-2.56q-44.581 0-81.152 1.719t-84.297 7.131-87.15 17.152-78.299 29.44-69.157 46.299-49.152 65.719q-35.438 70.29-35.438 189.147 0 135.424 77.714 226.304-15.433 46.848-15.433 97.134 0 66.304 29.147 124.562 61.696 0 108.581-22.565t107.995-70.583q84.005 20.005 176.567 20.005 84.553 0 160-18.286 60.014 46.848 106.862 69.157t107.995 22.272q29.147-58.295 29.147-124.562 0-49.701-15.433-96 77.714-91.429 77.714-227.438z" transform="translate(0, 812) scale(1, -1)"/>
                                </svg></a>
                            </li>
                            <li>
                         <a href="mailto:w3cay@foxmail.com" title="邮箱">
                              <svg version="1.1" id="图形" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" xml:space="preserve">
                                <path fill="#fff" d="M864 620l-704 0C107.072 620 64 576.928 64 524l0-448C64 23.072 107.072-20 160-20l704 0c52.928 0 96 43.072 96 96l0 448C960 576.928 916.928 620 864 620zM130.752 536.864l236.672-236.672L128 95.84 128 524C128 528.608 129.088 532.896 130.752 536.864zM412.864 254.752l31.232-31.232C462.208 205.408 486.336 195.424 512 195.424s49.792 9.984 67.904 28.096l27.584 27.52L850.176 44 165.824 44 412.864 254.752zM652.8 296.48l240.384 240.384C894.912 532.96 896 528.608 896 524l0-435.072L652.8 296.48zM821.824 556 534.656 268.832c-12.096-12.096-33.152-12.096-45.248 0L202.176 556 821.824 556z" transform="translate(0, 812) scale(1, -1)"/>
                            </svg>
                         </a>
                           </li>
                        </ul>
                    </div>

                </section>
                <section id="comment">
                    <div id="SOHUCS"></div>
                </section>
            </div>
            <footer class="footer">
    <div class="footer-con">
        <span class="copyright">
        <a  href="http://w3cay.com" target="_blank">&copy; 安望云海|W3CAY</a>
        <a  href="http://www.miitbeian.gov.cn/" rel="nofollow"> &nbsp豫ICP备15003362&nbsp</a>
        </span>
    </div>
</footer>
</body>
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
<div style="display:none">
<a href="http://www.zzidc.com">  title="景安网络" /></a>
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?c45eb0f0bbd3349f5c85f1afc603bb1f";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
</div>

        </body>
        <!--[if lt IE 9]>
        <script src="/Blog/Public/Jquery/jquery-1.11.2.js"></script>
        <![endif]-->
        <!--[if (gte IE 9)|!(IE)]><!-->
        <script src="/Blog/Public/Jquery/jquery-2.1.3.js"></script>
        <!--<![endif]-->
        <script src="/Blog/Public/Home/JS/comment.js"></script>
        <script type="text/javascript">
                var mebox = document.getElementById('mebox');
                mebox.style.height=window.innerHeight-60+'px';
                $('#icon').click(function() {
                     $('#intro').animate({
                        height:'60px',
                        padding:'10px',
                     });
                });
        </script>
    </html>