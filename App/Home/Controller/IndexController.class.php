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



        public function return_alist()
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

      static $firstnum =2;
         public function test(){
              
         //  // N('db',2); // 记录数据库操作次数
         //  N('read',1); // 记录读取次数
         // // echo N('db'); // 获取当前页面数据库的所有操作次数
         //  echo N('read'); // 获取当前页面读取次数
           
           
 
             

           // ++$firstnum;
           //  echo  $firstnum;
            
           }

}