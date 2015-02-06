<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/public.css">
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/article.css">
<form action="<?php echo U('Admin/Article/update');?>" method="post">
 <table class="table">
	<tr>
		<th>ID</th> <th>标题</th> <th>日期</th> <th>操作</th>
	</tr>
	<?php if(is_array($article)): foreach($article as $key=>$v): ?><tr >
		<td ><?php echo ($v["a_id"]); ?></td> 
		<td ><?php echo ($v["a_title"]); ?></td> 
		<td ><?php echo ($v["a_time"]); ?></td> 
		<td >
		<input  class="btn" type="submit" value="修改" />
		<input  class="btn" type="submit" value="删除" />
		</td> 
	</tr><?php endforeach; endif; ?>

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