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
		$article=M('article')->order('a_id ASC')->select();
		$this->article=$article;
		$this->display();
	}

	//添加文章页面
	public function editer()
	{
		$cate=M('cate')->order('c_sort ASC')->select();
		$this->cate=$cate;
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
	public function delcate()
	{
	
		$c_id=I('get.a_id');
		$count=M('article')->where("a_id=$a_id")->delete();
		if ($count>0) {
	                    $this->success('删除成功');
	                  }
	              else{
	                      $this->error("删除失败！");
	                  }
	}
}