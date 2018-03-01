<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;

class Contact extends Controller
{
	public function contact()
	{
		$uid = Session::get('uid');
        $user = Db::name('user')->where('id',$uid)->find();
        $this->assign('user',$user);
		return $this->fetch();
	}

	//把用户的评论放入数据库
	public function review()
	{/*
		if($_POST['name']){
			$username = trim($_POST['name']);
		} else {
			return 2;
		}
		if ($_POST['email']) {
			$email = trim($_POST['email']);
		} else {
			return 2;
		}
		if ($_POST['phone']){
			$phone = trim($_POST['phone']);
		} else {
			return 2;
		}
		if ($_POST['message']){
			$message = trim($_POST['message']);
		} else {
			return 2;
		}*/
		
			$username = trim($_POST['name']);
		
			$email = trim($_POST['email']);
		
			$phone = trim($_POST['phone']);
		
			$message = trim($_POST['message']);
		
			$result = Db::query("
			insert into 'hotel_evaluate'('username','email','tel','content','type','e_time') values ($username, $email, $phone, $message, 1 , 159600000)");
		if($result){
			return 0;
		} else {
			return 1;
		}
	}
}