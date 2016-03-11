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

<h3>数据库备份</h3>
<!-- 操作 -->
<div class="tools">     
<div class="form-inline">
  <div class="form-group">
    <a href="/thinkcms/admin.php/Db/backup" class="btn btn-primary">备份当前数据库</a>
  </div>
</div>   

</div>

<table class="table table-bordered table-hover">
  <tr>
    <th>名称</th>
    <th>大小</th> 
    <th>操作</th>
  </tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td><span class="text-primary"><?php echo ($vo["name"]); ?></span></td>
    <td><?php echo ($vo["size"]); ?>b</td>
    <td class="listview_action">
    <a href="/thinkcms/admin.php/Db/import/file/<?php echo ($vo["name"]); ?>"><i class="fa fa-undo"></i> 恢复</a>&nbsp;&nbsp;
    <a href="/thinkcms/admin.php/Db/del/file/<?php echo ($vo["name"]); ?>" onclick="return confirm('确定要删除吗')"><i class="fa fa-trash"></i> 删除</a>
    </td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>
</body>

footer