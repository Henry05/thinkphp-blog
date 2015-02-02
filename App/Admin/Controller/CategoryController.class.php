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
		$this->display();
	}
	//添加分类
	public function addcate()
	{
		$this->display();
	}
}