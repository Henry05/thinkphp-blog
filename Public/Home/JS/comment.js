// 评论模块JS实现
  (function(){
    screenWidth=$(document).width();
   if (screenWidth>685) {
    //非手机屏幕
    var appid = 'cyrHd3JxO',
    conf = 'prod_fa1020ba5784e2e7d357d612bf4b224e';
    var doc = document,
    s = doc.createElement('script'),
    h = doc.getElementsByTagName('head')[0] || doc.head || doc.documentElement;
    s.type = 'text/javascript';
    s.charset = 'utf-8';
    s.src =  'http://assets.changyan.sohu.com/upload/changyan.js?conf='+ conf +'&appid=' + appid;
    h.insertBefore(s,h.firstChild);
    window.SCS_NO_IFRAME = true;

   }

   else{
    //手机屏幕
    var expire_time = parseInt((new Date()).getTime()/(5*60*1000));
    var head = document.head || document.getElementsByTagName("head")[0] || document.documentElement;
    var script_version = document.createElement("script"),script_cyan = document.createElement("script");
    script_version.type = script_cyan.type = "text/javascript";
    script_version.charset = script_cyan.charset = "utf-8";
    script_version.onload = function(){
        script_cyan.id = 'changyan_mobile_js';
        script_cyan.src = 'http://changyan.itc.cn/upload/mobile/wap-js/changyan_mobile.js?client_id=cyrHd3JxO&'
                        + 'conf=prod_fa1020ba5784e2e7d357d612bf4b224e&version=' + cyan_resource_version;
        head.insertBefore(script_cyan, head.firstChild);
    };
    script_version.src = 'http://changyan.sohu.com/upload/mobile/wap-js/version.js?_='+expire_time;
    head.insertBefore(script_version, head.firstChild);
   };

 })();