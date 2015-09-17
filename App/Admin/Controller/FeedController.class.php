<?php
/**
*	订阅管理
*/
namespace Admin\Controller;
use Think\Controller;
class FeedController extends Controller{
	//订阅列表视图
	public function index()
	{
		$feedsite=M('feedsite')->select();
		$this->feedsite=$feedsite;
		$this->display();
	}
	//添加订阅
		public function addfeed()
	{
			$site['s_xml']=I('post.s_xml');
			$site['s_logo']=I('post.s_logo');
			$tempu=parse_url(I('post.s_xml'));
			$site['s_host']=$tempu['host'];
		if (M('feedsite')->add($site)) {
			$this->success('添加成功','index');
		}
	}

}