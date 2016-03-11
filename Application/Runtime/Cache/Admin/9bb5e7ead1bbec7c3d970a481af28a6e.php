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

<h3>网站设置 </h3>
<form action="/thinkcms/admin.php/Config/save" method="post">

    <table width="100%" class="table table-bordered table-hover table-admin">
      <tr>
        <th><label for="url">网站域名</label></th>
        <td style="width:550px;">
            <input name="url" type="text" class="form-control" id="url" value="<?php echo ($data["url"]); ?>" maxlength="50" />
        </td>
        <td>
          <div class="tip">网站域名：http://www.xxx.com/</div>
        </td>
      </tr>

      <tr>
        <th><label for="title">公司名称</label></th>
        <td>
            <input name="title" type="text" class="form-control" id="title" value="<?php echo ($data["title"]); ?>" maxlength="255" />
        </td>
        <td>
           <div class="tip">公司名称 / 网站名称</div>
        </td>
      </tr>

      <tr>
        <th><label for="title">网站LOGO</label></th>
        <td>
<input name="logo" type="text" class="form-control" id="logo" value="" maxlength="255" />
        </td>
        <td>
           <div class="tip">
           仅支持jpg、png格式
           </div>
        </td>
      </tr>

      <tr>
        <th><label for="seotitle">首页标题</label></th>
        <td>
            <input name="seotitle" type="text" class="form-control" id="seotitle" value="" maxlength="255" />
        </td>
        <td>
          <div class="tip">网站首页标题，不做SEO可以不填</div>
        </td>
      </tr>

      <tr>
        <th><label>SEO关键词</label></th>
        <td>
            <input name="keywords" type="text" class="form-control" id="keywords" value="" maxlength="255" />
        </td>
        <td><div class="tip">网站关键词\SEO关键词，不做SEO可以不填</div></td>
      </tr>

      <tr>
        <th><label>SEO网站描述</label></th>
        <td>
            <textarea name="description" rows="3" class="form-control" id="description"></textarea>
        </td>
        <td><div class="tip">网站描述\SEO描述，不做SEO可以不填</div></td>
      </tr>

      <tr>
        <th><label>版权信息</label></th>
        <td>
            <textarea name="copyright" rows="3" class="form-control" id="copyright"></textarea>
        </td>
        <td>
          <div class="tip">版权信息</div>
        </td>
      </tr>

      <tr>
        <th><label>网站公告</label></th>
        <td>
            <textarea name="info" rows="3" class="form-control" id="info"></textarea>
        </td>
        <td>
          <div class="tip">网站公告</div>
        </td>
      </tr>

      <tr>
        <th><label>客服QQ</label></th>
        <td>
            <input name="online" type="text" class="form-control" id="online" value="" maxlength="255" />
        </td>
        <td>
          <div class="tip">网站客服QQ，多个之间用 "," 半角英文逗号隔开</div>
        </td>
      </tr>

      <tr>
        <th><label>客服电话</label></th>
        <td>
            <input name="phone" type="text" class="form-control" id="phone" value="" maxlength="255" />
        </td>
        <td>
          <div class="tip">客服电话</div>
        </td>
      </tr>

      <tr>
        <th><label>管理员邮箱</label></th>
        <td>
            <input name="email" type="text" class="form-control" id="email" value="" maxlength="255" />
        </td>
        <td>
          <div class="tip">管理员邮箱，用于接收在线订购/留言/评论等信息</div>
        </td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td>
          <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> 保存设置</button>
          </td>
         <td></td>
      </tr>
    </table>

</form>
</body>

footer