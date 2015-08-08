<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/W3CAY/Public/editor/vendor/icomoon/editor.css" />
<link rel="stylesheet" type="text/css" href="/W3CAY/Public/Admin/CSS/article.css">
<script src="/W3CAY/Public/editor/docs/marked.js"></script>
<script src="/W3CAY/Public/editor/src/editor.js"></script>
<form action="<?php echo U('Admin/Article/update');?>" method="post">
<input id="this_c_id" type="hidden" value="<?php echo ($article["c_id"]); ?>"  />
 <div class="editor-wrapper">
    <select name="c_id">
      <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["c_id"]); ?>" id="<?php echo ($v["c_id"]); ?>"><?php echo ($v["c_name"]); ?></option><?php endforeach; endif; ?>
      </select>
      <input class="title" name="a_title" type="text" placeholder="Title" value="<?php echo ($article["a_title"]); ?>" />
      <textarea id="editor" name="a_content" placeholder="Content here ...."><?php echo ($article["a_content"]); ?></textarea>
    </div>
      <input  type="hidden" name="a_id" value="<?php echo ($article["a_id"]); ?>" />
<input class="subtn" type="submit" value="修改" />
</form>
</body>
<!--[if lt IE 9]>
<script src="/W3CAY/Public/Jquery/jquery-1.11.2.js"></script>
<![endif]

<!- -[if (gte IE 9)|!(IE)]><!-->
<script src="/W3CAY/Public/Jquery/jquery-2.1.3.js"></script>
<!--<![endif]-->

<!-- 获取selected栏目id -->
<script type="text/javascript">
 
  var cate_id = $("#this_c_id").val();
  $('#'+cate_id).attr("selected","selected");

</script>
<script type="text/javascript">
        var editor = new Editor();
          editor.render(); 
    </script>
</html>