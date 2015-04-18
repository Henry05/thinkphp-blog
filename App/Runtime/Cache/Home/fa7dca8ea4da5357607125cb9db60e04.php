<?php if (!defined('THINK_PATH')) exit(); if(is_array($more_article)): foreach($more_article as $key=>$v): ?><div class="alist">
    <div  class="alist-title"><a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html">
    <span class="time">[<?php echo ($v["a_time"]); ?>]</span> <h3><?php echo ($v["a_title"]); ?></h3></a></div>
    <a href="/W3CAY/article/<?php echo ($v["a_id"]); ?>.html"><div class="alist-digest"><?php echo (msubstr($v["a_content"],0,180,'utf-8')); ?></div></a>
    <div class="alsit-attr">
    </div>
</div><?php endforeach; endif; ?>