<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"E:\wamp64\www\git\hotel\public/../application/admin\view\member\administrator.html";i:1519695671;}*/ ?>
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
		  <script type="text/javascript" src="/admin/Widget/Validform/5.3.2/Validform.min.js"></script>
		  <script src="/admin/assets/js/typeahead-bs2.min.js"></script>           	
		  <script src="/admin/assets/js/jquery.dataTables.min.js"></script>
		  <script src="/admin/assets/js/jquery.dataTables.bootstrap.js"></script>
		  <script src="/admin/assets/layer/layer.js" type="text/javascript" ></script>          
		  <script src="/admin/js/lrtk.js" type="text/javascript" ></script>
		  <script src="/admin/assets/layer/layer.js" type="text/javascript"></script>	
		  <script src="/admin/assets/laydate/laydate.js" type="text/javascript"></script>
		  <title>管理员</title>
		</head>

		<body>
			<div class="page-content clearfix">
				<div class="administrator">
					<div class="d_Confirm_Order_style">
						<div class="search_style">

							<ul class="search_content clearfix">
								<li><label class="l_f">管理员名称</label><input name="" type="text"  class="text_add" placeholder=""  style=" width:400px"/></li>
								<li><label class="l_f">添加时间</label><input class="inline laydate-icon" id="start" style=" margin-left:10px;"></li>
								<li style="width:90px;"><button type="button" class="btn_search"><i class="fa fa-search"></i>查询</button></li>
							</ul>
						</div>
						<!--操作-->
						<div class="border clearfix">
							<span class="l_f">
								<a href="javascript:ovid()" id="administrator_add" class="btn btn-warning"><i class="fa fa-plus"></i> 添加管理员</a>
								<!-- <a href="javascript:ovid()" class="btn btn-danger"><i class="fa fa-trash"></i> 批量删除</a> -->
							</span>
							<span class="r_f">共：<b>5</b>人</span>
						</div>
						<div class="table_menu_list"  id="testIframe">
							<table class="table table-striped table-bordered table-hover" id="sample_table" width="1200">
								<thead>
									<tr>
										<th width="25px"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
										<th width="80px">编号</th>
										<th width="250px">登录名</th>
										<th width="100px">手机</th>
										<th width="100px">邮箱</th>
										<th width="100px">角色</th>				
										<th width="180px">加入时间</th>
										<th width="70px">状态</th>                
										<th width="200px">操作</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($res as $value): ?>
									<tr>
										<td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
										<td><?php echo $value['aid']; ?></td>
										<td><?php echo $value['ausername']; ?></td>
										<td><?php echo $value['atel']; ?></td>
										<td><?php echo $value['aemail']; ?></td>
										<td><?php if($value['admintype'] == 3): ?>超级管理员<?php elseif($value['admintype']==2): ?>高级管理员<?php else: ?>普通管理员<?php endif; ?></td>
										<td><?php echo $value['atime']; ?></td>
										<?php if($value['admin_zt']==1): ?>
										<td class="td-status"><span class="label label-success radius">已启用</span></td>
										<?php else: ?>
										<td class="td-status"><span class="label label-defaunt radius">已停用</span></td>
										<?php endif; ?>
										<td class="td-manage">
											<?php if($value['admin_zt'] == 1): ?>
											<a class="btn btn-xs btn-success" onClick="member_stop(this,<?php echo $value['aid']; ?>)" href="javascript:;" title="停用"><i class="fa fa-check  bigger-120"></i></a>
											<?php else: ?>
											<a class="btn btn-xs " onClick="member_start(this,<?php echo $value['aid']; ?>)" href="javascript:;" title="启用"><i class="fa fa-close bigger-120"></i></a>
											<?php endif; ?>  
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--添加管理员-->
			<div id="add_administrator_style" class="add_menber" style="display:none">
				<form action="/admin/Member/administrator" method="post" id="form-admin-add">
					<div class="form-group">
						<label class="form-label"><span class="c-red">*</span>管理员：</label>
						<div class="formControls">
							<input type="text" class="input-text" value="" placeholder="" id="user" name="user_name" datatype="*2-16" nullmsg="用户名不能为空">
						</div>
						<div class="col-4"> <span class="Validform_checktip"></span></div>
					</div>
					<div class="form-group">
						<label class="form-label"><span class="c-red">*</span>初始密码：</label>
						<div class="formControls">
							<input type="password" placeholder="密码" name="userpassword" autocomplete="off" value="" class="input-text" datatype="*6-20" id="pass" nullmsg="密码不能为空">
						</div>
						<div class="col-4"> <span class="Validform_checktip"></span></div>
					</div>
					<div class="form-group">
						<label class="form-label "><span class="c-red">*</span>确认密码：</label>
						<div class="formControls ">
							<input type="password" placeholder="确认新密码" autocomplete="off" class="input-text Validform_error" errormsg="您两次输入的新密码不一致！" datatype="*" nullmsg="请再输入一次新密码！" recheck="userpassword" id="newpassword2" name="newpassword2">
						</div>
						<div class="col-4"> <span class="Validform_checktip"></span></div>
					</div>
					<div class="form-group">
						<label class="form-label"><span class="c-red">*</span>真实姓名：</label>
						<div class="formControls">
							<input type="text" class="input-text" value="" placeholder="" id="realyname" name="realyname" datatype="*1-18" nullmsg="真实姓名不能为空">
						</div>
						<div class="col-4"> <span class="Validform_checktip"></span></div>
					</div>
					<div class="form-group">
						<label class="form-label "><span class="c-red">*</span>性别：</label>
						<div class="formControls  skin-minimal">
							<label><input name="form_field_radio" type="radio" class="ace" checked="checked" id="sex" value="保密"><span class="lbl">保密</span></label>&nbsp;&nbsp;
							<label><input name="form_field_radio" type="radio" class="ace" id="sex" value="男"><span class="lbl">男</span></label>&nbsp;&nbsp;
							<label><input name="form_field_radio" type="radio" class="ace" id="sex" value="女"><span class="lbl">女</span></label>
						</div>
						<div class="col-4"> <span class="Validform_checktip"></span></div>
					</div>
					<div class="form-group">
						<label class="form-label "><span class="c-red">*</span>手机：</label>
						<div class="formControls ">
							<input type="text" class="input-text" value="" placeholder="" id="tel" name="user_tel" datatype="m" nullmsg="手机不能为空">
						</div>
						<div class="col-4"> <span class="Validform_checktip"></span></div>
					</div>
					<div class="form-group">
						<label class="form-label"><span class="c-red">*</span>邮箱：</label>
						<div class="formControls ">
							<input type="text" class="input-text" placeholder="@" name="email" id="email" datatype="e" nullmsg="请输入邮箱！">
						</div>
						<div class="col-4"> <span class="Validform_checktip"></span></div>
					</div>
					<div class="form-group">
						<label class="form-label">角色：</label>
						<div class="formControls "> <span class="select-box" style="width:150px;">
							<select class="select" name="admin_role" size="1" id="admintype">
								<option value="3">超级管理员</option>
								<option value="2">高级管理员</option>
								<option value="1">普通管理员</option>
							</select>
						</span> </div>
					</div>
					<div class="form-group">
						<label class="form-label"><span class="c-red">*</span>身份证号：</label>
						<div class="formControls">
							<input type="text" class="input-text" value="" placeholder="" id="sfz" name="user_sfz" datatype="*18-18" nullmsg="身份证号不能为空">
						</div>
						<div class="col-4"> <span class="Validform_checktip"></span></div>
					</div>
					<div> 
						<input class="btn btn-primary radius" type="submit" id="Add_Administrator" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
					</form>
				</div>
			</div>
		</body>
		</html>
		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample_table').dataTable( {
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,2,3,4,5,7,8,]}// 制定列不参与排序
		  ] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});

				});


				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			});

		</script>
		<script type="text/javascript">
			$(function() { 
				$("#administrator").fix({
					float : 'left',
		//minStatue : true,
		skin : 'green',	
		durationTime :false,
		spacingw:50,//设置隐藏时的距离
	    spacingh:270,//设置显示时间距
	});
			});
//字数限制
function checkLength(which) {
	var maxChars = 100; //
	if(which.value.length > maxChars){
		layer.open({
			icon:2,
			title:'提示框',
			content:'您输入的字数超过限制!',	
		});
		// 超过限制的字数了就将 文本框中的内容按规定的字数 截取
		which.value = which.value.substring(0,maxChars);
		return false;
	}else{
		var curr = maxChars - which.value.length; //250 减去 当前输入的
		document.getElementById("sy").innerHTML = curr.toString();
		return true;
	}
};
//初始化宽度、高度  
$(".widget-box").height($(window).height()-215); 
$(".table_menu_list").width($(window).width()-260);
$(".table_menu_list").height($(window).height()-215);
  //当文档窗口发生改变时 触发  
  $(window).resize(function(){
  	$(".widget-box").height($(window).height()-215);
  	$(".table_menu_list").width($(window).width()-260);
  	$(".table_menu_list").height($(window).height()-215);
  })
  laydate({
  	elem: '#start',
  	event: 'focus' 
  });

  /*用户-停用*/
  function member_stop(obj,id){
  	layer.confirm('确认要停用吗？',function(index){
  		$.ajax({
  			"type":"post",
  			'url':"/admin/Member/upadminzt",
  			"data":{
  				'id':id
  			},
  			success:updatezt
  		});
  		function updatezt(data)
  		{
  			if (data == 1){
  				layer.alert('修改成功！',{
		         title: '提示框',				
		         icon:1,		
		       });
		   window.setTimeout("window.location='/admin/Member/administrator'",1000);   
  			} else if (data==2){
  				alert('修改失败');
  			} else{
  				// alert('修改失败，您的管理员等级不够');
  				layer.alert('修改失败，您的管理员等级不够',{
		         title: '提示框',				
		         icon:1,		
		       });
		   window.setTimeout("window.location='/admin/Member/administrator'",1000);
  			}
  		}
  		
  	});
  }
  /*用户-启用*/
  function member_start(obj,id){
  	layer.confirm('确认要启用吗？',function(index){
  		$.ajax({
  			"type":"post",
  			'url':"/admin/Member/upzt",
  			"data":{
  				'id':id
  			},
  			success:zt
  		});
  		function zt(data)
  		{
  			if (data == 1){
  				layer.alert('修改成功！',{
		         title: '提示框',				
		         icon:1,		
		       });
		   window.setTimeout("window.location='/admin/Member/administrator'",1000); 
  			} else if (data == 2){
  				alert('修改失败');
  			} else if(data == 3){
  				layer.alert('修改失败，您的管理员等级不够',{
		         title: '提示框',				
		         icon:1,		
		       });
		   window.setTimeout("window.location='/admin/Member/administrator'",1000);
  			}
  		}
  		
  	});
  }
  /*添加管理员*/
  $('#administrator_add').on('click', function(){
  	layer.open({
  		type: 1,
  		title:'添加管理员',
  		area: ['700px',''],
  		shadeClose: false,
  		content: $('#add_administrator_style'),

  	});
  	$.ajax({
  		"type":"post",
  		"url":"/admin/Member/administrator",
  		"data":{
  			'ausername':$("#user").val(),
  			'apassword':$("#pass").val(),
  			'asex':$("#sex").val(),
  			'atel':$("#tel").val(),
  			'aemail':$("#email").val(),
  			'admintype':$("#admintype").val(),
  			"asfz":$("#sfz").val(),
  			'aname':$("#realyname").val()
  		},
  		success:addadmin
  	});
  	function addadmin(data)
  	{	
  		if (data == 1){
  			alert(1111);
  		}else{
  			alert(2222);
  		}
  	}
  })
	//表单验证提交
	$("#form-admin-add").Validform({
		
		tiptype:2,

		callback:function(data){
		//form[0].submit();
		if(data.status==1){ 
			layer.msg(data.info, {icon: data.status,time: 1000}, function(){ 
                    location.reload();//刷新页面 
                });   
		} 
		else{ 
			layer.msg(data.info, {icon: data.status,time: 3000}); 
		} 		  
		var index =parent.$("#iframe").attr("src");
		parent.layer.close(index);
			//
		}
		
	});	
</script>

