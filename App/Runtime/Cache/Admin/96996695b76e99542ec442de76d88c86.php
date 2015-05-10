<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/public.css">
<style type="text/css">
	td{
		width: 10%;

	}
	.m-text{
		text-align: left;
		padding: 10px;
		background: #CBF3EE;
	}
</style>
 <table class="table">
	<tr>
		<th>ID</th><th>发件人</th><th>邮箱</th><th>发送时间</th><th>操作</th>
	</tr>
	<?php if(is_array($mes)): foreach($mes as $key=>$v): ?><tr >
		<td ><?php echo ($v["m_id"]); ?></td> 
		<td ><?php echo ($v["m_name"]); ?></td> 
		<td ><?php echo ($v["m_mail"]); ?></td> 
		<td ><?php echo ($v["m_date"]); ?></td> 
		<td >
		<a class="btn" href="/W3CAY/index.php/cay_admin/Message/delmes/m_id/<?php echo ($v["m_id"]); ?>" >删除</a>
		</td> 
	</tr>
	<tr >
		<td class="m-text" colspan="5"><?php echo ($v["m_text"]); ?></td>
	</tr><?php endforeach; endif; ?>

 </table>
<div class="paging"><?php echo ($page); ?></div>
</form>	



<!--[if lt IE 9]>
<script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]

<!- -[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/Jquery/jquery-2.1.3.js"></script>
<!--<![endif]-->