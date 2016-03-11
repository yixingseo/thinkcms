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

<!-- 编辑器 -->
<script src="/thinkcms/Public/ueditor/ueditor.config.js"></script>
<script src="/thinkcms/Public/ueditor/ueditor.all.min.js"></script>
<body class="abody">

<div class="container-fluid">

<h3 class="admin-title">内容列表 <small><a href="/thinkcms/admin.php/Article/add">添加</a></small></h3>

<form action="" method="get">
<div class="tools">
    <div class="row">
      <div class="col-md-6">
        <div class="form-inline">
          <div class="form-group">
            <select name="" class="form-control" id="" style="min-width:300px;">
            <option value="0">所有分类</option>
            <?php if(is_array($tree)): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tree): $mod = ($i % 2 );++$i;?><option value="<?php echo ($tree["id"]); ?>"><?php echo ($tree["tag"]); echo ($tree["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>  
            </select>
          </div>
          <div class="input-group">          
            <input type="text" class="form-control" name="keywords" placeholder="请输入关键字..">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">搜索</button>
            </span>
          </div><!-- /input-group -->
        </div>  
      </div>
      <div class="col-md-6 text-right">
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 推荐
        </label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 滚动
        </label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 首页
        </label>
      </div>
    </div>
</div>
</form>

<table width="100%" class="table table-bordered table-hover">
    <tr>
      <th style="width:50px" class="text-center"><input type="checkbox"></th>
      <th style="width:70px;" class="text-center">编号</th>
      <th>标题</th>
      <th>分类</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <th class="text-center"><input type="checkbox"></th>
      <td class="text-center text-success"><?php echo ($vo["id"]); ?></td>      
      <td><?php echo ($vo["title"]); ?></td>
      <td><?php echo ($vo["parent"]); ?></td>
      <td>
        <a href="/thinkcms/admin.php/Article/edit/id/<?php echo ($vo["id"]); ?>">修改</a>
        <a href="/thinkcms/admin.php/Article/del/id/<?php echo ($vo["id"]); ?>" onclick="return confirm('确定要删除吗？')">删除</a>
      </td>
    </tr><?php endforeach; endif; else: echo "$empty" ;endif; ?>
</table>
  
<nav class="text-center"><ul class="pagination"><?php echo ($page); ?></div></nav>  

</div>
  
footer