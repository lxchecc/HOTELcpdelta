<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Acticle extends Model
{
	//查询所有的消息
	public function articleSort()
	{
		return Db::table('hotel_xiaoxi')->select();
	}
	//查询所有消息的个数
	public function titleCount()
	{
		return Db::table('hotel_xiaoxi')->where("xid",'<>','0')->count();
	}
	//删除一条消息
	public function deltitle($id)
	{
		return Db::table('hotel_xiaoxi')->where("xid",$id)->delete();
	}
	//在管理员操作信息表中插入一条数据
	public function info($data)
	{
		return Db::table("hotel_admininfo")->insert($data);
	}
	//查询当前登录的管理员的所有信息
	public function aidselect($aid)
	{
		return Db::table('hotel_admin')->where('aid',$aid)->select();
	}
}