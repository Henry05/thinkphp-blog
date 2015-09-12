<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo U('Admin/Feed/addfeed');?>" method="post">
	<table>
	<tr>
	<td>添加RSS：</td><td><input type="text" name="s_xml"/></td>
	<td>添加logo:</td><td><input type="text" name="s_logo"/></td>
	<td><input type="submit" value="提交" /></td>
	</tr>
	</table>
</form>
</body>
</html>