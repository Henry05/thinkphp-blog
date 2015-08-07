<?php
/**
*	文章管理
*/
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller{
	//文章列表视图
	public function index()
	{
		$Aview =D("ArticleView"); // 实例化Articel视图model对象 
		$count = $Aview->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	    $Page->setConfig('prev', '<<');
   	    $Page->setConfig('next', '>>');
    	$Page->setConfig('theme', ' %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		$show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$Page->setConfig('header','个会员');
		$article = $Aview->order('a_id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('article',$article);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}

	//添加文章页面
	public function editer()
	{
		$cate=M('cate')->order('c_sort ASC')->select();
		$this->cate=$cate;
		$this->display();
	}
	//添加文章页面
	public function markedit()
	{
		$this->display();
	}

	//文章发布
	public function submit()
	{
		$article['a_title']=I('post.a_title');
		$article['a_content']=htmlspecialchars_decode(I('post.a_content'));
		$article['a_time']=date("Y-m-d");
		$article['c_id']=I('post.c_id');
		if(M('article')->add($article)){
			$this->success('发布成功！','index');
		}
		else{
			$this->error('发布失败！');
		}
	}
	//删除文章
	public function delarticle()
	{
		

		
		$a_id=I('get.a_id');
		$Article=M('article');
		$content = $Article->where("a_id=$a_id")->getField('a_content');
		
		//匹配文章图片
		preg_match_all("/Uploads(.*?(?:[\.gif|\.jpg]))[\'|\"].*?/", $content,$matches);
		

	    //删除文章图片
			foreach ($matches[1] as $key => $value) {
			
				$str='./Uploads'.$value;
		
				 if (file_exists($str)) {
				 	if(!unlink($str)){
					 $this->error("图片删除失败！");
					}
				 }
			
		       }
	
     //删除文章
		$count=$Article->where("a_id=$a_id")->delete();
		if ($count>0) {
	                    $this->success('删除成功');
	                  }
	              else{
	                      $this->error("删除失败！");
	                  }


         }


	//修改文章
	public function modify()
	{
		  $cate=M('cate')->order('c_sort ASC')->select();
		  $this->cate=$cate;
		  $a_id=I('get.a_id');
          $article=M('article')->where("a_id=$a_id")->select();
          $this->assign('article',$article['0']);
          $this->display();
	}
	public function update()
	{	
		$m=M('article');
        $article['a_id']=I('post.a_id');
		$article['a_title']=I('post.a_title');
		$article['a_content']=htmlspecialchars_decode(I('post.a_content'));
		$article['a_mtime']=date("Y-m-d");
		$article['c_id']=I('post.c_id');
		if($m->save($article)){
			$this->success('修改成功！','index');
		}
		else{
			$this->error('修改失败！');
		}
	}
}