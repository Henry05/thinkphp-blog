<?php
namespace Common\Model;
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel {   
	public $viewFields = array(     
		'Article'=>array('a_id','a_title','a_content','a_time','a_mtime','c_id'),     
		'Cate'=>array('c_id'=>'cate_id', 'c_name','c_value',
			'_on'=>'Article.c_id=Cate.c_id'
			),    );}