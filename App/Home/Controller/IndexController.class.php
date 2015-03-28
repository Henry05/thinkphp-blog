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
      

     public function index(){
        
         
          $Aview =D("ArticleView"); // 实例化Articel视图model对象 
          $last= $Aview->order('a_id DESC')->limit(0,4)->select();
          foreach ($last as $key => $arr) {
          $last[$key]['a_content']=strip_tags($last[$key]['a_content']);
          }
  

          $hot= $Aview->order('a_id ASC')->limit(0,4)->select();
          foreach ($hot as $key => $arr) {
          $hot[$key]['a_content']=strip_tags($hot[$key]['a_content']);
          }

          $this->assign('last',$last);
          $this->assign('hot',$hot);
          $this->display();
    }



        public function return_last()
        {


            $lastnum = 4;
             $firstnum= $_GET["firstnum"];      
            $Aview =D("ArticleView"); // 实例化Articel视图model对象 
          $last= $Aview->order('a_id DESC')->limit($firstnum,$lastnum)->select();
          foreach ($last as $key => $arr) {
            $data=strip_tags($last[$key]['a_content']);
         $last[$key]['a_content']=msubstr($data,0,20,'utf-8');
          }    
          $this->assign('last',$last);
          $this->display();
        }
          public function return_hot()
        {

            $lastnum = 4;
           $hotnum= $_GET["hotnum"];
              $Aview =D("ArticleView"); // 实例化Articel视图model对象 
           $hot= $Aview->order('a_id ASC')->limit($hotnum,$lastnum)->select();
          foreach ($hot as $key => $arr) {
          $hot[$key]['a_content']=strip_tags($hot[$key]['a_content']);
          }
          $this->assign('hot',$hot);

          $this->display();
            

        }

     public function theme(){
          
          $c_value=I('get.c_value');
          $Aview =D("ArticleView"); // 实例化Articel视图model对象 
          //查找对应栏目名称
          $c_name=$Aview->where("c_value='$c_value'")->getField('c_name');
          $article= $Aview->order('a_id DESC')->where("c_value='$c_value'")->select();
          foreach ($article as $key => $arr) {
          $article[$key]['a_content']=strip_tags($article[$key]['a_content']);
          }
          $this->assign('c_name',$c_name);
          $this->assign('article',$article);
          $this->display();
    }
     public function article(){
         
          $a_id=I('get.a_id');
          $Aview =D("ArticleView"); // 实例化Articel视图model对象 
          $article=D("ArticleView")->where("a_id=$a_id")->select();
          $this->assign('article',$article['0']);
          $this->display();
    }

    
         public function test(){
              
        
            
           }

}