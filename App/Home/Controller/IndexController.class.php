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
          $last= $Aview->order('a_id DESC')->limit(0,10)->select();
          foreach ($last as $key => $arr) {
          $last[$key]['a_content']=strip_tags($last[$key]['a_content']);
          }
  

          $hot= $Aview->order('a_clicks DESC,a_id ASC')->limit(0,10)->select();
          foreach ($hot as $key => $arr) {
          $hot[$key]['a_content']=strip_tags($hot[$key]['a_content']);
          }

          $this->assign('last',$last);
          $this->assign('hot',$hot);
          $this->display();
    }



        public function return_last()
        {


            $lastnum = 10;
             $firstnum= $_GET["firstnum"];      
            $Aview =D("ArticleView"); // 实例化Articel视图model对象 
          $last= $Aview->order('a_id DESC')->limit($firstnum,$lastnum)->select();
          foreach ($last as $key => $arr) {
             $last[$key]['a_content']=strip_tags($last[$key]['a_content']);
          }    
          $this->assign('last',$last);
          $this->display();
        }
          public function return_hot()
        {

            $lastnum = 10;
           $hotnum= $_GET["hotnum"];
              $Aview =D("ArticleView"); // 实例化Articel视图model对象 
           $hot= $Aview->order('a_clicks DESC,a_id ASC')->limit($hotnum,$lastnum)->select();
          foreach ($hot as $key => $arr) {
          $hot[$key]['a_content']=strip_tags($hot[$key]['a_content']);
          }
          $this->assign('hot',$hot);

          $this->display();
            

        }

     public function theme(){
          
          $c_value=I('get.c_value');
          $Aview =D("ArticleView"); // 实例化Articel视图model对象 
       
          $count      = $Aview->where("c_value='$c_value'")->count();// 查询满足要求的总记录数
          $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
          $Page->setConfig('prev', '<<');
          $Page->setConfig('next', '>>');
          $Page->setConfig('theme', ' %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% ');
          $show       = $Page->show();// 分页显示输出
          $list = $Aview->order('a_id DESC')->where("c_value='$c_value'")->limit($Page->firstRow.','.$Page->listRows)->select();
         
          foreach ($list as $key => $arr) {
          $list[$key]['a_content']=strip_tags($list[$key]['a_content']);
          }

          $this->assign('article',$list);// 赋值文章列表数据集

          $c_name=$Aview->where("c_value='$c_value'")->getField('c_name');  //查找对应栏目名称

          $this->assign('c_name',$c_name);//栏目标识

          $this->assign('page',$show);// 赋值分页输出
          $this->display();
    }


     public function article(){
         
          $a_id=I('get.a_id');

          M('article')->where("a_id=$a_id")->setInc('a_clicks'); // 文章阅读加1

          $Aview =D("ArticleView"); // 实例化Articel视图model对象 

          $article=D("ArticleView")->where("a_id=$a_id")->select();

          $this->assign('article',$article['0']);

          $this->display();
    }



}