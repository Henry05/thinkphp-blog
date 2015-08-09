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
          
     public function listquery($order,$limit,$where)
     {

          $Aview =D("ArticleView"); // 实例化Articel视图model对象   
          $listdata= $Aview->order($order)->limit($limit)->where($where)->select();
          foreach ($listdata as $key => $arr) {
          $listcon= htmlspecialchars_decode($listdata[$key]['a_content']);
          $Parsedown = new \Org\Util\Parsedown();
          $parse = $Parsedown->text($listcon);
          $listdata[$key]['a_content']=strip_tags($parse);
           }
          return $listdata;
     }

     public function index(){
          $last= $this->listquery(array('a_id'=>'desc'),"0,10","");
          $hot= $this->listquery(array('a_clicks'=>'desc','a_id'=>'asc'),"0,10","");
          $this->assign('last',$last);
          $this->assign('hot',$hot);
          $this->display();
    }

        public function return_list()
        {
          $hotnum= $_GET["hotnum"];
          $firstnum= $_GET["firstnum"];   
          if ($firstnum) {
             $list= $this->listquery(array('a_id'=>'desc'),"$firstnum,10",""); 

            } 
          elseif($hotnum) {
             $list= $this->listquery(array('a_clicks'=>'desc','a_id'=>'asc'),"$hotnum,10","");
            }
          $this->assign('list',$list);      
          $this->display();
        }

     public function theme(){
          
          $c_value=I('get.c_value');
          $Aview =D("ArticleView"); // 实例化Articel视图model对象
          $where['c_value']= $c_value;
          $list= $this->listquery(array('a_id'=>'desc'),"0,10",$where); 
          $this->assign('article',$list);

          //查找对应栏目标识
          $c_name=$Aview->where($where)->getField('c_name');  
          $this->assign('c_name',$c_name);
          $this->assign('c_value',$c_value);

          $this->display();
    }

    public function more_theme()
    {   
          $c_value=I('get.c_value');
          $lastnum = 10;
          $listnum= $_GET["listnum"];
          $Aview =D("ArticleView"); // 实例化Articel视图model对象 
          $more_article= $Aview->order('a_id DESC')->where("c_value='$c_value'")->limit($listnum,$lastnum)->select();
          foreach ($more_article as $key => $arr) {
          $more_article[$key]['a_content']=strip_tags($more_article[$key]['a_content']);
          }
          $this->assign('more_article',$more_article);

          $this->display();
    }
     public function article(){

         
          $a_id=I('get.a_id');

          M('article')->where("a_id=$a_id")->setInc('a_clicks'); // 文章阅读加1

          $Aview =D("ArticleView"); // 实例化Articel视图model对象 

          $article=D("ArticleView")->where("a_id=$a_id")->select();

          $a_content= htmlspecialchars_decode($article['0']['a_content']);

          $Parsedown = new \Org\Util\Parsedown();

          $parse = $Parsedown->text($a_content);

          $this->assign('parse',$parse);
          $this->assign('article',$article['0']);

          $this->display();
    }

    public function aboutme()
    {
      
      $message['m_text'] = I('post.inptext'); 
      $message['m_name'] = I('post.inpname'); 
      $message['m_mail'] = I('post.inpmail'); 
      $message['m_date']= date("Y-m-d H:i:s");
      if ($message['m_text']!= ''|| $message['m_name']!= '' || $message['m_mail']!='') {
           M('message')->add($message);
      }
      $this->display();
    }

}