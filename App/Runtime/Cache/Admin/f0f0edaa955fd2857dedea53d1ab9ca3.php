<?php if (!defined('THINK_PATH')) exit();?> 
<!DOCTYPE html>
<html>
    <head>
        <title>管理登录界面</title>
        <link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/login.css">
    </head>
    <body>
        <div class="admin"><i class="admin-login-icon"></i> W3CAY后台管理</div>
        <div  class="box">


            <form class="from" action='/W3CAY/index.php/cay_admin/Login/login'  method='post'>
                <span >用户名：<input class="inpt" type="text" name="a_name" style="border:1px solid #9595ec;" ></br></span>
                <span>密　码：<input class="inpt" type="password" name="a_pwd"  style="border:1px solid #9595ec;" ></br></span>
                <span>验证码：<input class="inpt"type="text" name="code" style="width:80px;border:1px solid #9595ec; "><img id="code" src="/W3CAY/index.php/cay_admin/Public/code" onclick='this.src=this.src+"?"+Math.random;' ></span>
                <input class="bm"  type="submit"  value="点击登录"  >
            </form>
        </div>
    </body>
</html>