<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
   
     public function _before_index(){
     	//输出layout栏目
    	$cate=M('cate')->order('c_sort ASC')->select();
		$this->cate=$cate;
     }
     public function index(){
        $this->display();
    }
        public function test(){
        echo __PUBLIC__;
    }

}