<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): foreach($list as $key=>$v): ?><div class="alist"  >
    <div class="alist-icon" >
        <a href="/Blog/topic/<?php echo ($v["c_value"]); ?>"> <img src="/Blog/Public/Home/IMG/<?php echo ($v["c_value"]); ?>.png"></a>
    </div>
    <div class="alist-con">
        <div  class="alist-title">
            <a href="/Blog/article/<?php echo ($v["a_id"]); ?>.html">
            <span>[<?php echo ($v["a_time"]); ?>]</span>
            <h3 ><?php echo ($v["a_title"]); ?></h3>
        </a></div>
        <a href="/Blog/article/<?php echo ($v["a_id"]); ?>.html"><div class="alist-digest"><?php echo (msubstr($v["a_content"],0,130,'utf-8')); ?></div></a>
    </div>
</div><?php endforeach; endif; ?>