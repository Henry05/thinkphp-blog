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

          $c_id=I('get.c_id');
          $article=M('article')->order('a_id DESC')->where("c_id=$c_id")->select();
          foreach ($article as $key => $arr) {
          $article[$key]['a_content']=mb_substr( $article[$key]['a_content'],0,200,'utf-8');
          }
          $this->assign('article',$article);
          $this->display();
    }
     public function article(){

          $a_id=I('get.a_id');
          $article=M('article')->where("a_id=$a_id")->select();
          $this->assign('article',$article['0']);
          $this->display();
    }
         public function test(){


      
          

    }

}