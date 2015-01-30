<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller{
 function code(){
 		$config =array(    
 		'fontSize'    =>    15,    // 验证码字体大小    
 		'length'      =>    4,   // 验证码位数    
 		 'useNoise'    => false , // 关闭验证码杂点
 		 'imageW'     => 110,
 		  'imageH'     => 30,
 		  );
		$Verify = new \Think\Verify($config);
		$Verify->entry();
 }
}
