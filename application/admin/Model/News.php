<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class News extends Model
{
	public function newselect()
	{
		return Db::table("hotel_evaluate e,hotel_user u")->where('e.eid=u.id')->select();
	}
	public function delnew($id)
	{
		return Db::table('hotel_evaluate')->where('eid',$id)->delete();
	}
	public function cont($id)
	{
		return Db::table("hotel_evaluate e,hotel_user u")->where('e.eid',$id)->select();
	}
}