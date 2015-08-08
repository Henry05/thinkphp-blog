<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Markdown</title>
	<meta charset= "utf-8">
	    <style type="text/css">
      body {
        padding: 0;
        margin: 0;
        background-color: #f9f9f7;
      }
      .editor-wrapper {
        max-width: 680px;
        padding: 10px;
        margin: 60px auto;
      }
    </style>
</head>
    <script src="/W3CAY/Public/editor/docs/marked.js"></script>
    <script src="/W3CAY/Public/editor/src/editor.js"></script>
    <link rel="stylesheet" type="text/css" href="/W3CAY/Public/editor/vendor/icomoon/editor.css" />
<body>
    <div class="editor-wrapper">
      <input class="title" type="text" placeholder="Title" />
      <textarea id="editor" placeholder="Content here ...."></textarea>
    </div>
    <div id="display" class="editor-wrapper"></div>
    <button id="submit">提交</button>
    <script type="text/javascript">
    	  var editor = new Editor();
          editor.render();

          
        var sub = document.getElementById("submit");
        var display =document.getElementById("display");
        sub.onclick=function () {
           var value = editor.codemirror.getValue();
           display.innerHTML=marked(value);
         }

    </script>
</body>
</html>