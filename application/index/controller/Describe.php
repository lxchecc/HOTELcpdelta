<?php
namespace app\index\controller;
use think\Session;

use think\Controller;
use think\Db;
class describe extends controller
{
	//公司简介模板
	public function describe()
	{
		$roomNum = count(Db::name('room')->field('rid')->where('status',0)->select());
		$restNum = count(Db::name('rest')->field('cid')->where('status',0)->select());
		$caiNum = count(Db::name('menu')->field('mid')->select());
		$userNum = count(Db::name('user')->field('id')->select());
		        $uid = Session::get('uid');
        $user = Db::name('user')->where('id',$uid)->find();
        $this->assign('user',$user);	
		$this->assign('userNum',$userNum);
		$this->assign('caiNum',$caiNum);
		$this->assign('restNum',$restNum);
		$this->assign('roomNum',$roomNum);
		return $this->fetch();
	}
}