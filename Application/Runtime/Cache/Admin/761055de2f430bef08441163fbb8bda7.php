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
<script src="/thinkcms/Public/js/jquery.min.js"></script>
<script src="/thinkcms/Public/js/bootstrap.min.js"></script>
<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<body class="adminbody">

<form action="/thinkcms/index.php/Admin/Article/update" method="post">
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
<div class="container-fluid">

  <h3 class="title">内容管理 <small><a href="/thinkcms/index.php/Admin/Article/index">列表</a></small></h3>
  <div class="row">
      <!-- left -->
      <div class="col-xs-9 form-horizontal">

            <!-- pid -->
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">* 内容分类</label>
                <div class="col-sm-10">
                    <select name="pid" id="pid" class="form-control require" style="width:300px;">
                      <option value="0">根目录</option>
                    </select>
                </div>
            </div>

            <!-- title -->
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">* 内容标题</label>
                <div class="col-sm-10">
                    <input name="title" type="text" id="title" value="<?php echo ($data["title"]); ?>" placeholder="内容标题" class="form-control require" />
                </div>
            </div>

            <!-- info -->
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">内容摘要</label>
                <div class="col-sm-10">
                    <textarea name="info" class="form-control" id="info" placeholder="内容摘要信息"><?php echo ($data["info"]); ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-2 control-label">缩略图</label>
                <div class="col-sm-10">
                    <p><input name="pic" type="text" id="pic" value="" placeholder="" class="form-control" /></p>
                    <div class="well well-sm">
                        <div class="" id="filePicker">上传图片</div>
                    </div>
                </div>
            </div>

            <!-- content -->
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">内容主体</label>
                <div class="col-sm-10">
                    <script id="content" name="content" type="text/plain" style="width:100%;height:300px;"></script>
                </div>
            </div>

        </div>
        <!-- left.end -->
        
        <!-- right -->
        <div class="col-xs-3">                
            <div class="form-group">
                <label for="">添加时间</label>
                <input name="insert_date" type="text" id="insert_date" value="<?php echo ($data["addtime"]); ?>" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">SEO标题</label>
                <input name="seotitle" type="text" id="seotitle" value="" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">SEO关键词</label>
                <input name="keywords" type="text" id="keywords" value="<?php echo ($data["keywords"]); ?>" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">SEO描述</label>
                <textarea name="description" class="form-control" id="description"><?php echo ($data["description"]); ?></textarea>
            </div>

            <div class="form-group">
                <label for="">URL别名</label>
                <input name="urlname" type="text" id="urlname" value="" class="form-control url" />
            </div>

            <div class="form-group">
                <label for="">内容排序</label>
                <input name="weight" type="text" id="weight" value="" class="form-control" />
            </div>

            <div class="form-group">
                <div class="checkbox">

                </div>
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox"> 放入回收站</label>
                </div>
            </div>
            
            <div class="command well text-center">                             
                <a href="" class="btn btn-success"> <i class="fa fa-check"></i> 预览</a>                    
                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> 发布</button>                    
            </div>
        </div>
        <!-- right.end -->

            <div class="clearfix"></div>
        </div>

    </div>
  
</div>

</form>  
</body>
</html>