<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use \think\Session;
use app\admin\Model\Login as loginModel;

class Login extends controller
{
	public function loginOut()
	{
		Session::clear();
		$this->redirect('/admin/Login/login');		
	}
	public function login()
	{
		$course = new loginModel($_POST);
		if ($_REQUEST){
			$username = $_REQUEST['user'];
			$password = $_REQUEST['pwd'];
			$res = Db::table('hotel_admin')->where("ausername",$username)->select();
		
			if ($res == null){
				echo "<script>alert('抱歉，您不是管理员')</script>";
				echo "<meta http-equiv='refresh' content='0;url=/admin/Login/login'>";
			}else{
				$user = $res[0]['ausername'];
				$pwd  = $res[0]['apassword'];
				$admintype = $res[0]['admintype'];
				$aid = $res[0]['aid'];
				$ip = $_SERVER['SERVER_ADDR'];
				if ($ip == '::1'){
					$ip = '127.0.0.1';
					$ip = ip2long($ip);
				}else {
					$ip;
				}
				$time = time();
				$admin_zt = $res[0]['admin_zt'];
				Session::set('admintype',$admintype);
				Session::set('aid',$aid);
				if ($username == $user && md5($password) == $pwd){
					if ($admin_zt == 1){
						db::table('hotel_admin')->where('aid',$aid)->update(['aip'=>$ip,'alogtime'=>$time]);
						db::table('hotel_admininfo')->insert(['aid'=>$aid,'admintype'=>$admintype,'ausername'=>$username,'aip'=>$ip,'alogtime'=>$time]);
						$this->success('登录成功','/admin/Index/index',3);
					} else{
						db::table('hotel_admininfo')->insert(['aid'=>$aid,'admintype'=>$admintype,'ausername'=>$username,'aip'=>$ip,'alogtime'=>$time]);
						$this->success('登录失败,被禁止登录','/admin/Login/login',3);
					}
				}else {
					db::table('hotel_admininfo')->insert(['aid'=>$aid,'admintype'=>$admintype,'ausername'=>$username,'aip'=>$ip,'alogtime'=>$time]);
					echo "<script>alert('用户名或密码错误')</script>";
					echo "<meta http-equiv='refresh' content='0;url=/admin/Login/login'>";
				}
			}	
		}
		return $this->fetch();
	}
}