<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpStudy\WWW\cygw\public/../application/admin\view\index\index.html";i:1523791949;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<!--   <title>Jack</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>通知公告</title>
  
  <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">  
  <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 
</head>
<body>

  <div  class="container">   
<h2><a href="#">信息发布</a></h2>
	<!-- <ol class="breadcrumb">
  		<li><a href="index">信息显示</a></li>
  		<li><a href="add">信息添加</a></li>
	</ol> -->
<form  action="" method="post">
  <div class="form-group" >
  	标题：
    <input type="text" class="form-control" name="title" value="" placeholder="请输入标题" maxlength="100">
     
  </div>
  <div class="form-group">
     发布人：
   <input type="text" class="form-control" name="publisher"  value="" placeholder="请输入发布人" maxlength="100">
  </div>
   
   	<!-- 加载编辑器的容器 -->
    内容：
    <script id="container" name="content" type="text/plain" style="height:500px">
       
    </script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/cygw/public/static/ueditor/ueditor.config.js"></script>
    <!--编辑器源码文件 -->
    <script type="text/javascript" src="/cygw/public/static/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script> 
	
  <button type="submit" id="btn" class="btn btn-primary"  >提交</button>
</form>
 
 
 </div>

  
 </body>
 </html>