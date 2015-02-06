<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/public.css">
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/category.css">
<form action="<?php echo U('Admin/Category/update');?>" method="post">
 <table class="table">
	<tr>
		<th>ID</th> <th>名称</th> <th>级别</th> <th>排序</th> <th>值</th><th>操作</th>
	</tr>
	<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr >
		<td class="cate-td"><?php echo ($v["c_id"]); ?>
		<input name="c_id" class="inp" id="thisid" type="hidden" disabled="disabled"  value="<?php echo ($v["c_id"]); ?>"></td> 

		<td class="cate-td"><span><?php echo ($v["c_name"]); ?></span>
		<input name="c_name" class="inp" type="hidden"  disabled="disabled" value="<?php echo ($v["c_name"]); ?>"></td> 

		<td class="cate-td"><span><?php echo ($v["c_pid"]); ?></span>
		<input name="c_pid" class="inp" type="hidden" disabled="disabled" value="<?php echo ($v["c_pid"]); ?>"></td> 

		<td class="cate-td"><span><?php echo ($v["c_sort"]); ?></span>
		<input name="c_sort" class="inp"  type="hidden"  disabled="disabled" value="<?php echo ($v["c_sort"]); ?>" /></td> 

		<td class="cate-td"><?php echo ($v["c_value"]); ?>
		<input name="c_id" class="inp" id="thisid" type="hidden" disabled="disabled"  value="<?php echo ($v["c_value"]); ?>"></td> 

		<td class="cate-td">
		    <input class="btn update"  type="button" value="修改" />
			<a class="btn" href="/W3CAY/index.php/cay_admin/Category/delcate/c_id/<?php echo ($v["c_id"]); ?>" >删除</a>
			<a class="btn" href="">添加子类</a>
		</td>
	</tr><?php endforeach; endif; ?>

 </table>



</form>	
<!-- 	添加栏目 -->
<form action="<?php echo U('Admin/Category/addcate');?>" method='post'>
<table class="table">
		<tr >
			<td class="td-title">添加栏目</td> 
			<td >名称：<input name="c_name" type="text" style="width:200px"  /></td> 
		    <td >排序：<input name="c_sort" type="text" value="100" style="width:200px"/></td> 
		    <td >值：<input name="c_value" type="text" style="width:200px"  /></td> 
			<td><input  class="btn" type="submit" value="添加" /></td>
		</tr>
</table>
</form>

<!--[if lt IE 9]>
<script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]

<!- -[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/Jquery/jquery-2.1.3.js"></script>
<!--<![endif]-->

<!--   栏目管理Js引入文件 -->
<script type="text/javascript" src="/W3CAY/Public/Admin/JS/category.js"></script>