<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"E:\wamp64\www\git\hotel\public/../application/admin\view\spin\productcategoryadd.html";i:1519695671;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/admin/css/style.css"/>       
  <link rel="stylesheet" href="/admin/assets/css/ace.min.css" />
  <link rel="stylesheet" href="/admin/assets/css/font-awesome.min.css" />
  <link href="/admin/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
      <script src="/admin/js/jquery-1.9.1.min.js"></script>
      <script src="/admin/assets/js/bootstrap.min.js"></script>
      <title>添加产品分类</title>
    </head>
    <body>
      <div class="type_style">
       <div class="type_title">产品类型信息</div>
       <div class="type_content">
        <div class="Operate_btn">
          <a href="javascript:ovid()" class="btn  btn-warning"><i class="icon-edit align-top bigger-125"></i>新增子类型</a>
        </div>
        <form action="admin/Spin/productCategoryAdd" enctype="multipart/form-data" method="post" >
          <div>
            <span style="margin-left: 50px;">类型：</span>
            <select style="margin-left: 16px;" name="type">
              <option value="1">菜名</option>
              <option value="2">房间</option>
              <option value="3">餐厅</option>
            </select>
          </div>
          <div class="Operate_cont clearfix">
            <label class="form-label"><span class="c-red" style="color:red;">*</span>图片：</label>
            <div class="formControls ">
              <input type="file" class="input-text" value="" placeholder="" id="user-name" name="file" style="margin-left:10px;">
            </div>
          </div>
          <div class="Operate_cont clearfix">
            <label class="form-label"><span class="c-red" style="color:red;">*</span>名字：</label>
            <div class="formControls ">
              <input type="text" class="input-text" value="" placeholder="" id="user-name" name="cname">
            </div>
          </div>
           <div>
            <span style="margin-left: 25px;">房间类型：</span>
            <select style="margin-left: 16px;" name="room">
              <option value="1">普通房间</option>
              <option value="2">标准房间</option>
              <option value="3">高级房间</option>
              <option value="4">豪华包房</option>
              <option value="5">总统套房</option>
            </select>
            <span style="color:#ccc;">如果选择添加房间此项必填</span>
          </div>
          <div style="margin-top: 15px;">
            <span style="margin-left: 25px;">房间类型：</span>
            <select style="margin-left: 16px;" name="ct">
              <option value="1">家庭用餐</option>
              <option value="2">休闲餐饮</option>
              <option value="3">自助餐厅</option>
              <option value="4">婚礼餐桌</option>
              <option value="5">酒吧和休息室</option>
              <option value="6">户外用餐</option>
            </select>
            <span style="color:#ccc;">如果选择添加餐厅此项必填</span>
          </div>
          <div style="margin-top: 15px;"><span style="margin-left:50px;">价格:</span><input type="text" name="money" style="margin-left: 30px;"></div>
          <div class="Operate_cont clearfix">
            <label class="form-label">介绍：</label>
            <div class="formControls">
              <textarea name="content" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,100)"></textarea>
              <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
            </div>
          </div>
          <div class="">
           <div class="" style=" text-align:center">
            <input class="btn btn-primary radius" type="submit" value="提交">
          </div>
        </div>
      </form>
    </div>
  </div> 
</div>
<script type="text/javascript" src="/admin/Widget/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/admin/Widget/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="/admin/assets/layer/layer.js"></script>
<script type="text/javascript" src="/admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
  $(function(){
   $('.skin-minimal input').iCheck({
    checkboxClass: 'icheckbox-blue',
    radioClass: 'iradio-blue',
    increaseArea: '20%'
  });
   $("#form-user-add").Validform({
    tiptype:2,
    callback:function(form){
     form[0].submit();
     var index = parent.layer.getFrameIndex(window.name);
     parent.$('.btn-refresh').click();
     parent.layer.close(index);
   }
 });
 });
</script>
</body>
</html>