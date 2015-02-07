<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/article.css">

<form action="<?php echo U('Admin/Article/submit');?>" method="post">
<table class="top-inp">
		<tr >
			<td>栏目:
			<select name="c_id" value="<?php echo ($v["c_name"]); ?>">
			<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["c_id"]); ?>"><?php echo ($v["c_name"]); ?></option><?php endforeach; endif; ?>
			</select>
			</td> 
		<td >标题：<input class="title" name="a_title" type="text" value="<?php echo ($article["a_title"]); ?>"  /></td
		</tr>
</table>
<div class="editer">
      <!-- 加载编辑器的容器 -->
    <script id="container" name="a_content" type="text/plain">
      <?php echo ($article["a_content"]); ?>
    </script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/W3CAY/Public/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/W3CAY/Public/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container', {
       autoHeight: false,
       initialFrameWidth:900,  //初始化编辑器宽度,默认1000
       initialFrameHeight:400,  //初始化编辑器高度,默认320

     });
    </script>
</div>
<input class="subtn" type="submit" value="发布" />
</form>
</body>

</html>