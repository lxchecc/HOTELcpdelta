<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"C:\wamp\www\tp\hotel\public/../application/admin\view\member\admincompetence.html";i:1519625670;}*/ ?>
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
		  <script src="/admin/assets/js/jquery.dataTables.min.js"></script>
		  <script src="/admin/assets/js/jquery.dataTables.bootstrap.js"></script>
		  <script src="/admin/assets/layer/layer.js" type="text/javascript" ></script>          
		  <script src="/admin/assets/laydate/laydate.js" type="text/javascript"></script>
		  <title>管理权限</title>
		</head>
		<body>
			<div class="margin clearfix">
				<div class="border clearfix">
					<span class="l_f">
						<a href="#" id="Competence_add" class="btn btn-warning" title="管理员列表"><i class="fa fa-plus"></i> 管理员列表</a>
						<!-- a href="javascript:ovid()" class="btn btn-danger"><i class="fa fa-trash"></i> 批量删除</a> -->
					</span>
					<span class="r_f">共：<b>3</b>类</span>
				</div>
				<div class="compete_list">
					<table id="sample-table-1" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th class="center"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
								<th>ID</th>
								<th>管理员名称</th>
								<th>级别</th>
								<th>真实姓名</th>
								<th class="hidden-480">描述</th>             
								<th class="hidden-480">操作</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($res as $value): ?>
							<tr>
								<td class="center"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
								<td><?php echo $value['aid']; ?></td>
								<td><?php echo $value['ausername']; ?></td>
								<td><?php if($value['admintype']==3): ?>超级管理员<?php elseif($value['admintype']==2): ?>高级管理员<?php else: ?>普通管理员<?php endif; ?></td>
								<td class="hidden-480"><?php echo $value['aname']; ?></td>
								<?php if($value['admintype'] == 3): ?>
								<td>拥有至高无上的权利,操作系统的所有权限</td>
								<?php elseif($value['admintype'] == 2): ?>
								<td>拥有部分权限</td>
								<?php elseif($value['admintype'] == 1): ?>
								<td>只可以进行简单的登陆和修改信息</td>
								<?php endif; ?>
								<td>       
									<a title="删除" href="javascript:;"  onclick="Competence_del(this,<?php echo $value['aid']; ?>)" class="btn btn-xs btn-warning" ><i class="fa fa-trash  bigger-120"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>	
						</tbody>
					</table>
				</div>
			</div>
			
</body>
</html>
<script type="text/javascript">
	
/*权限-删除*/
function Competence_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			"type":"post",
			"url":"/admin/Member/adminCompetence",
			"data":{
				'id':id
			},
			success:admindelete
		});
		function admindelete(data)
		{
			if (data == 1){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			}else if(data == 2) {
				$(obj).parents("tr").remove();
				layer.msg('删除失败!',{icon:1,time:1000});
			}else if(data == 3){
				alert("删除失败，您的等级小于或等于对方的等级!");
			}
		}
		
	});
}

/*修改权限*/
function Competence_modify(id){
	window.location.href ="Competence.html?="+id;
};	
/*字数限制*/
function checkLength(which) {
	var maxChars = 200; //
	if(which.value.length > maxChars){
		layer.open({
			icon:2,
			title:'提示框',
			content:'您出入的字数超多限制!',	
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
//面包屑返回值
var index = parent.layer.getFrameIndex(window.name);
parent.layer.iframeAuto(index);
$('.Order_form ,#Competence_add').on('click', function(){
	var cname = $(this).attr("title");
	var cnames = parent.$('.Current_page').html();
	var herf = parent.$("#iframe").attr("src");
	parent.$('#parentIframe span').html(cname);
	parent.$('#parentIframe').css("display","inline-block");
	parent.$('.Current_page').attr("name",herf).css({"color":"#4c8fbd","cursor":"pointer"});
	//parent.$('.Current_page').html("<a href='javascript:void(0)' name="+herf+">" + cnames + "</a>");
	parent.layer.close(index);
	
});
</script>