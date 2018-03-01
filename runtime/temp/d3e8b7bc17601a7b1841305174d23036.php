<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\wamp64\www\git\hotel\public/../application/admin\view\acticle\acticleadd.html";i:1519695671;}*/ ?>
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
  <link rel="stylesheet" href="/admin/font/css/font-awesome.min.css" />
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
      <![endif]-->
      <script src="/admin/js/jquery-1.9.1.min.js"></script>
      <script src="/admin/assets/js/bootstrap.min.js"></script>
      <script src="/admin/assets/js/typeahead-bs2.min.js"></script>  	         	
      <script src="/admin/assets/layer/layer.js" type="text/javascript" ></script>          
      <script src="/admin/assets/laydate/laydate.js" type="text/javascript"></script>
      <script src="/admin/js/H-ui.js" type="text/javascript"></script>
      <title>添加文章</title>
    </head>

    <body>
      <div class="margin clearfix">
       <div class="article_style">
        <div class="add_content" id="form-article-add">
         <ul>
          <li class="clearfix Mandatory">
            <label class="label_name"><i>*</i>文章标题</label><span class="formControls col-10"><input name="文章标题" type="text" id="title" class="col-xs-10 col-sm-5 "></span>
          </li>
          <li class="clearfix Mandatory"><label class="label_name"><i>*</i>文章简介</label>
            <span class="formControls col-10"><input name="文章简介" type="text" id="brief" class="col-xs-10 col-sm-6 "></span>
          </li>
        </li>
        <li class="clearfix"><label class="label_name">显示时间</label>
          <span class="formControls col-10">
            <span class="add_date l_f">
             <label><input name="radio" type="radio" class="ace" onclick="Enable()"><span class="lbl">显示</span></label>&nbsp;
             <label><input name="radio" type="radio" class="ace" onclick="closes()"><span class="lbl">不显示</span></label></span>
             <span class="date_Select">
              <em class="laydate-icon" id="start" style="width:200px; margin-left:10px; padding-left:5px; margin-right:10px; display:block; float:left"></em>
              <em style="display:block; float:left;margin-right:10px;">至</em>
              <em class="laydate-icon" id="end" style="width:200px; padding-left:5px; display:block ;float:left"></em>
            </span>
            <b  style=" margin-left:10px; font-weight:normal; color:#F63">注：(该时间用于设置文章内容在网站显示的时间段，过了显示时间段该文章将不再网站上显示，无需再次操作，适合活动使用)</b>
          </span>
        </li>
        <li class="clearfix"><i>*</i><label class="label_name">文章内容</label>
          <textarea style="margin-left:20px;width: 600px;height:200px;" id="content"></textarea>
        </li>
      </ul>
      <div class="Button_operation">
        <button onclick="article_save_submit();" class="btn btn-primary radius" type="submit">保存并提交</button>
        <button onclick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script type="text/javascript" src="Widget/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="Widget/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="Widget/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script> 
<script type="text/javascript">
  /**提交操作**/
  function article_save_submit(){
    var num=0;
    var str="";
    $(".Mandatory input[type$='text']").each(function(n){
      if($(this).val()=="")
      {
        layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
          title: '提示框',				
          icon:0,								
        }); 
        num++;
        return false;            
      } 
      
    });
    $.ajax({
      "type":"post",
      "url":"/admin/Acticle/acticleAdd",
      "dataType":"json",
      "data":{
        "title":$('#title').val(),
        "brief":$('#brief').val(),
        "content":$('#content').val()
      },
      "success":tianjia
    });
    //问题代码   回调函数不走
    function tianjia(data)
    {
      //alert(data);
      if (data == 1){
        layer.alert('添加成功！',{
         title: '提示框',        
         icon:1,    
       });
      }else if (data == 2){
       layer.alert('添加失败！',{
         title: '提示框',        
         icon:1,    
       });
     } else if (data == 3){
       layer.alert('添加失败，您的权限不够',{
         title: '提示框',        
         icon:1,    
       });
     }
   }	  		     					
 }
 $(function(){
   var ue = UE.getEditor('editor');
 });
 /*radio激发事件*/
 function Enable(){ $('.date_Select').css('display','block');}
 function closes(){$('.date_Select').css('display','none')}
 /**日期选择**/
 var start = {
  elem: '#start',
  format: 'YYYY/MM/DD',
    min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
       }
     };
     var end = {
      elem: '#end',
      format: 'YYYY/MM/DD',
      min: laydate.now(),
      max: '2099-06-16 ',
      istime: true,
      istoday: false,
      choose: function(datas){
        start.max = datas; //结束日选好后，重置开始日的最大日期
      }
    };
    laydate(start);
    laydate(end);
  </script>
