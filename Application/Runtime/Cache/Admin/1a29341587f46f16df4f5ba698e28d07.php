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

<body class="abody">

<h3>栏目管理 <small><a href="/thinkcms/admin.php/Channel/add">添加</a></small></h3>


<table width="100%" class="table table-bordered table-hover">
  <tr>
    <th style="width:80px;">编号</th>
    <th>栏目名称 | 别名</th>
    <th class="text-center">类型</th>    
    <th class="text-center">排序</th>
    <th>操作</th>
  </tr>

<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
  <td><?php echo ($vo["id"]); ?></td>
  <td><?php echo ($vo["tag"]); ?> <?php echo ($vo["name"]); ?> <small><?php echo ($vo["title"]); ?></small></td>
  <td></td>  
  <td class="weight"><?php echo ($vo["weight"]); ?></td>
  <td>
    <a href="/thinkcms/admin.php/Channel/add/parent/<?php echo ($vo["id"]); ?>"><i class="fa fa-plus"></i> 添加小类</a>
    <a href="/thinkcms/admin.php/Channel/edit/id/<?php echo ($vo["id"]); ?>"><i class="fa fa-pencil"></i> 修改</a>
    <a href="/thinkcms/admin.php/Channel/delete/id/<?php echo ($vo["id"]); ?>" onclick="return confirm('确定要删除吗？')"><i class="fa fa-trash-o"></i> 删除</a>
  </td>
</tr><?php endforeach; endif; else: echo "$empty" ;endif; ?>

</table>

footer