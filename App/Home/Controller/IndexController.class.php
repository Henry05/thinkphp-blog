<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
   
   //全局前置操作
     public function _initialize(){
     	//输出layout栏目
    	$cate=M('cate')->order('c_sort ASC')->select();
		$this->cate=$cate;
     }
    //
     public function index(){
        $this->display();
    }

     public function theme(){
        $topic=I('get.topic');
        $this->display();
    }
     public function article(){

        $this->display();
    }

}