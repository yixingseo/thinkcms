<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="/thinkcms/Public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/thinkcms/Public/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="/thinkcms/Public/css/admin.css">
<!-- js -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="adminbody">


<div class="container-fluid">
  <h3 class="title">内容列表 <small><a href="/thinkcms/index.php/Admin/Article/add">添加</a></small></h3>
  <table class="table table-hover">
    <tr>
      <th>编号</th>
      <th>标题</th>
      <th>分类</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($vo["id"]); ?></td>
      <td><?php echo ($vo["parent"]); ?></td>
      <td><?php echo ($vo["title"]); ?></td>
      <td>
        <a href="edit/id/<?php echo ($vo["id"]); ?>">修改</a>
        <a href="del/<?php echo ($vo["id"]); ?>" onclick="return confirm('确定要删除吗？')">删除</a>
      </td>
    </tr><?php endforeach; endif; else: echo "$empty" ;endif; ?>
  </table>
  

</div>