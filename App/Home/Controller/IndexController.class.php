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
        
        

          $last= $Aview->order('a_id DESC')->select();
          foreach ($last as $key => $arr) {
          $last[$key]['a_content']=strip_tags($last[$key]['a_content']);
          }
  

          $hot= $Aview->order('a_id ASC')->select();
          foreach ($hot as $key => $arr) {
          $hot[$key]['a_content']=strip_tags($hot[$key]['a_content']);
          }
 
     
          $this->assign('last',$last);
          $this->assign('hot',$hot);
          $this->display();
    }

     //  public function user(){

     //    import("ORG.Util.AjaxPage");// 导入分页类  注意导入的是自己写的AjaxPage类
     //    $Aview =D("ArticleView"); // 实例化Articel视图model对象 
     //    $count = $Aview->count(); //计算记录数
     //    $limitRows = 5; // 设置每页记录数
       
     //    $p = new AjaxPage($count, $limitRows,"user"); //第三个参数是你需要调用换页的ajax函数名
     //    $limit_value = $p->firstRow . "," . $p->listRows;
       
     //    $data = $Aview->order('a_id desc')->limit($limit_value)->select(); // 查询数据
     //    $page = $p->show(); // 产生分页信息，AJAX的连接在此处生成

     //    $this->assign('list',$data);
     //    $this->assign('page',$page);
     //    $this->display();

     // }
        public function return_alsit()
        {
          //   $Aview =D("ArticleView"); // 实例化Articel视图model对象 

          // $last= $Aview->order('a_id DESC')->select();
          // foreach ($last as $key => $arr) {
          // $last[$key]['a_content']=strip_tags($last[$key]['a_content']);
          // }



          // $hot= $Aview->order('a_id ASC')->select();
          // foreach ($hot as $key => $arr) {
          // $hot[$key]['a_content']=strip_tags($hot[$key]['a_content']);
          // }
          // $last="ssasa";
          //   $this->ajaxReturn($last);


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