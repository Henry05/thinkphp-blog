<?php
/**
* 登录页面
*/

namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
		public function index(){
			$this->display();
		}

	  public function login(){

      
        $code=I('code');
    	if (!check_verify($code)) {
    	 	$this->error('验证码错误！');
    	 } 
       
        $Admin=M('admin');//实例化数据库表admin
        $a_name=I('a_name');
        $a_pwd=I('a_pwd');
        $find=$Admin->where(array('a_name' =>$a_name ,'a_pwd'=>$a_pwd ))->select();
        if (!$find||$a_pwd='') {
            $this->error('用户名或密码不正确!');
        }
        else
        	$_SESSION['a_name']=$a_name;
            $this->success('成功！',U("Admin/Index/index"));

    }
}