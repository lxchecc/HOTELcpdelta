<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\Model\User as UserModel;

//会员管理
class User extends controller
{
	public function userList()
	{
		//修改会员状态
		if ($_POST){
			//接收AJAX传过来的值
			$id = $_POST['id'];
			$hy_zt = $_POST['hy_zt'];
			//判断状态是否等于0 如果是0则禁止 是1则允许
			if ($hy_zt == 0){
				$up = Db::table('hotel_member')->where('hid',$id)->update(['hy_zt'=>2]);
				if ($up){
					echo 1;die;
				}else{
					echo 2;die;
				}
			}elseif($hy_zt == 1) {
				$up = Db::table('hotel_member')->where('hid',$id)->update(['hy_zt'=>1]);
				if ($up){
					echo 1;die;
				}else{
					echo 2;die;
				}
			}
		}
	//查询所有VIP的会员信息
		$res = Db::table("hotel_member m,hotel_user u")->where("m.uid=u.id")->select();
		foreach ($res as $key => $value) {
			$time = $value['hy_time'];
			$time = date('Y-m-d H:i:s',$time);
			$res[$key]['hy_time'] = $time;
		}
	//查询一共有多少会员
		$count = Db::table('hotel_member')->where('hid','<>','0')->count();
	//分配变量
		$this->assign('count',$count);
		$this->assign("res",$res);
		return $this->fetch();
	}
	public function integration()
	{
	//查询所有的用户信息
		$res = Db::table('hotel_user')->where('id','<>','0')->select();
	//分配变量
		$this->assign('res',$res);
	//ajax删除 删除某一个用户
		if ($_POST){
			$uid = $_POST['uid'];
			$del = Db::table('hotel_user')->where('id',$uid)->delete();
			if(!$del){
				echo 1;
			}
		}
		return $this->fetch();
	}
	public function del()
	{
		//取消VIP
		if($_POST){
			$id = $_POST['id'];
			$del = Db::table('hotel_member')->where('hid',$id)->delete();
			if ($del){
				echo 1;
			}else {
				echo 2;
			}
		}
	}
	public function add()
	{
		if($_POST){
			$id = $_POST['id'];
			$user = $_POST['user'];
			$email = $_POST['email'];
			$time = time();
			$select = Db::table('hotel_user')->where('id',$id)->select();
			if ($select){
				$insert = Db::table('hotel_member')->insert(['uid'=>$id,'hy_time'=>$time]);
				if ($insert){
					echo 1;
				}else {
					echo 2;
				}
			}
		}
	}
}