<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Member extends Model
{
	//查询管理员的个人信息
	public function upselect($id)
	{
		return Db::table('hotel_admin')->where("aid",$id)->select();
	}
	//修改个人信息
	public function upinfo($id,$data)
	{
		return Db::table('hotel_admin')->where("aid",$id)->update($data);
	}
	//在hotel_admininfo表中插入一条记录
	public function insertinfo($data)
	{
		return Db::table('hotel_admininfo')->insert($data);
	}
	//查询所有的管理员
	public function vip()
	{
		return Db::table('hotel_admin')->where('aid','<>','0')->select();
	}
	//删除管理员
	public function delvip($id)
	{
		return Db::table('hotel_admin')->where("aid",$id)->delete();
	}
	//添加管理员
	public function addadmin($data)
	{
		return Db::table('hotel_admin')->insert($data);
	}
	//修改管理员状态
	public function upzt($id,$data)
	{
		return Db::table('hotel_admin')->where('aid',$id)->update($data);
	}
}