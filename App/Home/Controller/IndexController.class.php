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
          
     public function listquery($order,$limit,$where,$strip)
     {

          $Aview =D("ArticleView"); // 实例化Articel视图model对象   
          $listdata= $Aview->order($order)->limit($limit)->where($where)->select();
          foreach ($listdata as $key => $arr) {
          $listcon= htmlspecialchars_decode($listdata[$key]['a_content']);
          $Parsedown = new \Org\Util\Parsedown();
          $parse = $Parsedown->text($listcon);
          if ($strip == true)  {
             $listdata[$key]['a_content']=stripslashes(strip_tags($parse));
          }else if($strip == false){
             $listdata[$key]['a_content']=stripslashes($parse);
          }
           }
          return $listdata;

     }

     public function index(){
          $last= $this->listquery(array('a_id'=>'desc'),"0,10","",true);
          $hot= $this->listquery(array('a_clicks'=>'desc','a_id'=>'asc'),"0,10","",true);
          $this->assign('last',$last);
          $this->assign('hot',$hot);
          $title="安望云海-致力于HTML/CSS/JS/前端开发";
          $this->assign('title',$title);
          $this->display();
    }

        public function return_list()
        {
          $hotnum= $_GET["hotnum"];
          $firstnum= $_GET["firstnum"];  
          $where['c_value'] =I('get.c_value');
          if ($where['c_value'] =='') {
            $where="";
          }
          if ($firstnum) {
             $list= $this->listquery(array('a_id'=>'desc'),"$firstnum,10",$where,true); 

            } 
          elseif($hotnum) {
             $list= $this->listquery(array('a_clicks'=>'desc','a_id'=>'asc'),"$hotnum,10",$where,true);
            }
          $this->assign('list',$list);      
          $this->display();
        }

     public function theme(){
          $where['c_value']=I('get.c_value');
          $last= $this->listquery(array('a_id'=>'desc'),"0,10",$where,true);
          $hot= $this->listquery(array('a_clicks'=>'desc','a_id'=>'asc'),"0,10",$where,true);
          $this->assign('last',$last);
          $this->assign('hot',$hot);
          //返回栏目值变量
          $this->assign('c_value',$where['c_value']);

          //查询对应栏目名称
          $Aview =D("ArticleView"); // 实例化Articel视图model对象
          $c_name=$Aview->where($where)->getField('c_name');  
          $c_name=$c_name." - 安望云海";
          $this->assign('title',$c_name);
        
          $this->display(index);
    }

     public function article(){  
          $where['a_id']=I('get.a_id'); 
          M('article')->where($where)->setInc('a_clicks'); // 文章阅读加1
          $article= $this->listquery("","",$where,false);
          if ( $article == null) {
            $this->display("Public:404"); //显示自定义的404页面模版  
          }else{
            $this->assign('article',$article['0']);
            $this->display();
          }

    }

     public function message()
     {
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