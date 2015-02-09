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
          
          $Aview =D("ArticleView"); // 实例化Articel视图model对象 
          $last = $Aview->order('a_id DESC')->select();
          $hot  = $Aview->order('a_id ASC')->select();      
          $this->assign('last',$last);
          $this->assign('hot',$hot);
          $this->display();
    }
       
      public  function returnlist()
        { 
          $Aview =D("ArticleView"); // 实例化Articel视图model对象 
          $count = $Aview->count();// 查询满足要求的总记录数
          $last = $Aview->order('a_id DESC')->select();         
          foreach ($last as $key => $arr) {
          
          $con=strip_tags($last[$key]['a_content']);
          $last[$key]['a_content']= msubstr($con,0,200,'utf-8');
          }
          $this->ajaxReturn($last);
        }

     public function theme(){
          
          $c_value=I('get.c_value');
          $Aview =D("ArticleView"); // 实例化Articel视图model对象 
          $article= $Aview->order('a_id DESC')->where("c_value='$c_value'")->select();
          foreach ($article as $key => $arr) {
          $article[$key]['a_content']=strip_tags($article[$key]['a_content']);
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
            $Model =D("ArticleView"); // 实例化Articel视图model对象 
            $article= $Model->order('a_id DESC')->select();

      
           }

}