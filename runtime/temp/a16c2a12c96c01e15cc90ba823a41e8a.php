<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp\www\tp\hotel\public/../application/admin\view\system\systems.html";i:1519653726;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/admin/css/style.css"/>       
  <link href="/admin/assets/css/codemirror.css" rel="stylesheet">
  <link rel="stylesheet" href="/admin/assets/css/ace.min.css" />
  <link rel="stylesheet" href="/admin/assets/css/font-awesome.min.css" />
        	<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
      <![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
      <![endif]-->
      <script src="/admin/js/jquery-1.9.1.min.js"></script>
      <script src="/admin/assets/js/bootstrap.min.js"></script>
      <script src="/admin/assets/js/typeahead-bs2.min.js"></script>           	
      <script src="/admin/assets/layer/layer.js" type="text/javascript" ></script>          
      <script src="/admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
      <script src="/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
      <script src="/admin/assets/js/ace-elements.min.js"></script>
      <script src="/admin/assets/js/ace.min.js"></script>
      <title>系统设置</title>

    </head>

    <body>
      <div class="margin clearfix">
       <div class="stystems_style">
        <div class="tabbable">
         <ul class="nav nav-tabs" id="myTab">
           <li class="active">
            <a data-toggle="tab" href="#home"><i class="green fa fa-home bigger-110"></i>&nbsp;基本设置</a></li>
          </ul>
            <form action="/admin/System/systems" method="post">
            <div class="tab-content">
              <div id="home" class="tab-pane active">
               <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>网站名称： </label>
                <div class="col-sm-9"><input type="text" id="website-title" placeholder="控制在25个字、50个字节以内" value="<?php echo $name; ?>" class="col-xs-10 " name="name"></div>
              </div>
              <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>描述： </label>
                <div class="col-sm-9"><input type="text" id="website-title" placeholder="空制在80个汉字，160个字符以内" value="<?php echo $content; ?>" class="col-xs-10" name="content"></div>
              </div>
              <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>底部版权信息： </label>
                <div class="col-sm-9"><input type="text" id="website-title" placeholder="" value="<?php echo $info; ?>" class="col-xs-10 " name="info"></div>
              </div>
              <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>备案号： </label>
                <div class="col-sm-9"><input type="text" id="website-title" placeholder="" value="<?php echo $beian; ?>" class="col-xs-10 " name="beian"></div>
              </div>
              <input type="submit" name="up" value="修改" style="margin-left:400px;width: 80px;background:#ccc;">
            </div>
        </div>
        </form>
      </div>
    </div>

  </div>
</body>
</html>
<script>
  $('#id-input-file-2').ace_file_input({
   no_file:'选择上传图标 ...',
   btn_choose:'选择',
   btn_change:'更改',
   droppable:false,
   onchange:null,
					thumbnail:false, //| true | large
					whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
      </script>
