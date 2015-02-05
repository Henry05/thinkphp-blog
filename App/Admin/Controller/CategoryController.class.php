<?php
/**
*	栏目管理
*/

namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller{
	//分类列表视图
	public function index()
	{
		$cate=M('cate')->order('c_sort ASC')->select();
		$this->cate=$cate;
		$this->display();
	}

	//添加分类
	public function addcate()
	{
		if (M('cate')->add(I('post.'))) {
			$this->success('添加成功','index');
		}
	}
	//更新数据
	public function update()
	{
		if (M('cate')->save(I('post.'))) {
			$this->success('更新成功','index');
		}
	}
	//删除栏目
	public function delcate()
	{
	
		$c_id=I('get.c_id');
		$count=M('cate')->where("c_id=$c_id")->delete();
		if ($count>0) {
	                    $this->success('删除成功');
	                  }
	              else{
	                      $this->error("删除失败！");
	                  }
	}
}