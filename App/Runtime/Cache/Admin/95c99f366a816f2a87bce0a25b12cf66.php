<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Blog/Public/editor/vendor/icomoon/editor.css" />
<link rel="stylesheet" type="text/css" href="/Blog/Public/editor/markdown.css" />  
<script src="/Blog/Public/editor/docs/marked.js"></script>
<script src="/Blog/Public/editor/src/editor.js"></script>
<link rel="stylesheet" type="text/css" href="/Blog/Public/Admin/CSS/article.css">
<form action="<?php echo U('Admin/Article/submit');?>" method="post">
 <div class="editor-wrapper">
      <select name="c_id">
      <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["c_id"]); ?>"><?php echo ($v["c_name"]); ?></option><?php endforeach; endif; ?>
      </select>
      <input class="title" name="a_title" type="text" placeholder="Title" />
      <textarea id="editor" name="a_content" placeholder="Content here ...."></textarea>
    </div>
<input class="subtn" type="submit" value="发布" />
</form>
</body>
<script type="text/javascript">
        var editor = new Editor();
          editor.render(); 
    </script>
</html>