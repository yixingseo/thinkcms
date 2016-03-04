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

<!-- 图片上传 -->
<script src="/thinkcms/Public/webuploader/webuploader.min.js"></script>
<link rel="stylesheet" href="/thinkcms/Public/webuploader/webuploader.css">

<h3 class="admin-title">分类管理</h3>
<form action="/thinkcms/index.php/Admin/Category/insert" method="post" id="form">
<input type="hidden" name="id" value="<?php echo ($category["id"]); ?>">
<div class="container-fluid">
  <div class="row">
    <!-- left -->    
    <div class="col-xs-8 form-horizontal">
      
      <!-- parent -->
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">上级分类</label>
        <div class="col-sm-10">
          <select name="parent" id="parent" class="form-control" style="width:300px;">
          <option value="0">根目录</option>
            <?php if(is_array($tree)): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["tag"]); echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "$empty" ;endif; ?>
          </select>
        </div>
      </div>    
      
      <!-- title -->
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">分类名称</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control require" id="title" value="<?php echo ($category["title"]); ?>" maxlength="255" />
        </div>
      </div>
      
      <!-- thumbnail -->
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">缩略图</label>
        <div class="col-sm-10">
          <p><input name="thumbnail" type="text" id="thumbnail" value="" placeholder="" class="form-control" /></p>
          <div class="well well-sm">
              <div class="" id="filePicker">上传图片</div>
          </div>
        </div>
      </div>
      
      <!-- content -->
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">内容主体</label>
        <div class="col-sm-10">
          <script id="content" name="content" type="text/plain" style="height:300px;">

          </script>
        </div>
      </div>

    </div>
    <!-- left.end -->

    <div class="col-xs-3">
      
        <div class="form-group">
          <label for="">URL别名</label>
          <input name="urlname" type="text" class="form-control url" id="urlname" value="" maxlength="255" />
        </div>

        <div class="form-group">
          <label for="">分类显示模板</label>
          <select name="sort_template" id="sort_template" class="form-control">
              <option value="">分类模板</option>

          </select>
        </div>
        
        <div class="form-group">
          <label for="">内容显示模板</label>
          <select name="content_template" id="content_template" class="form-control">
              <option value="">内容模板</option>

          </select>
        </div>
        
        <div class="form-group">
          <label for="">排序</label>
          <input name="weight" type="text" id="weight" value="" class="form-control" />
        </div>

        <div class="form-group">
          <div class="checkbox"><label>
          <input name="is_parent" type="checkbox" /> 
          不显示在分类列表中
          </label>
          <div class="checkbox"><label>
          <input name="is_nav" type="checkbox" /> 
          不显示在导航中</label>
        </div>

        <div class="well well-sm">
          <a href="" class="btn btn-success"> <i class="fa fa-check"></i> 预览</a>
          <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> 发布</button>
        </div>
    </div>
    <!-- right.end -->
    <div class="clearfix"></div>
  </div>
</div>



</form>
<script>
var ue = UE.getEditor('content');

$(function(){    
    $('#parent').val('<?php echo ($category["parent"]); ?>');
    //$('#sort_template').val('');
    //$('#content_template').val('');    
})

//缩略图上传
var uploader = WebUploader.create({
    fileNumLimit:1,
    auto: true,
    swf: '../include/webuploader/Uploader.swf',
    server: '../include/webuploader/server/fileupload.php',
    pick: '#filePicker',
    accept: {
        title: 'Images',
        extensions: 'jpg,png',
        mimeTypes: 'image/*'
    },
    compress:{
        width: 400,
        height: 400,
    }
});

uploader.on( 'uploadError', function( file , reason ) {
   alert('上传失败');
});

uploader.on( 'uploadSuccess', function( file , response) {    
    var imgurl = response.url;
    $('#pic').val(imgurl);
});

</script>