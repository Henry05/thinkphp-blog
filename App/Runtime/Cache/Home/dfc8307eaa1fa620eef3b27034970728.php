<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>前端聚合</title>
	 <style type="text/css">

	 </style>
</head>
<body>
<?php if(is_array($rss)): foreach($rss as $key=>$v): ?><div class="alist" >

            <span>[<?php echo ($v["updated"]); echo ($v["pubdate"]); ?>]</span>
         <a href="<?php echo ($v["link"]); ?>" target="_blank">   <span ><?php echo ($v["title"]); ?></sapn></a>

</div><?php endforeach; endif; ?>
</body>
</html>