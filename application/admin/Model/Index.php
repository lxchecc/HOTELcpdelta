<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Index extends Model
{
	//获取消费用户总数
	public function user()
	{
		$select = Db::table('hotel_order')->distinct(true)->field('uid')->select();
		return count($select);
	}
	//获取总订单数
	public function dingdan()
	{
		return Db::table('hotel_order')->where('oid','<>','0')->count();
	}
	public function ctdd()
	{
		return Db::table('hotel_sumption')->where('yid','<>','0')->count();
	}
	//获取支付完成的订单数
	public function cjdingdan()
	{
		return Db::table('hotel_order')->where('o_state','<>','2')->count();
	}
	public function ctdingdan()
	{
		return Db::table('hotel_sumption')->where('y_status',1)->count();
	}
	//获取成交金额总数
		//房间消费总额
	public function roommoney()
	{
		return Db::table('hotel_order')->where('o_state','1')->sum('o_money');
	}
		//餐厅消费总额
	public function ctmoney()
	{
		return Db::table('hotel_sumption')->where('y_status',1)->sum('y_money');
	}
	//未支付订单总数
	public function wzf()
	{
		return Db::table('hotel_order')->where('o_state','2')->count();
	}
	//未入住订单总数
	public function wrz($time)
	{
		return Db::table("hotel_order")->where('ru_time','>=',$time)->count();
	}
	//已入住订单总数
	public function yrz($time)
	{
		return Db::table("hotel_order")->where('ru_time','<=',$time)->count();
	}
	//餐厅未支付订单总数
	public function restwzf()
	{
		return Db::table("hotel_sumption")->where("y_status",'2')->count();
	}
	//餐厅已支付订单总数
	public function restyzf()
	{
		return Db::table("hotel_sumption")->where("y_status",'1')->count();
	}
	//新上架总数
	public function new($time)
	{
		return Db::table("hotel_menu")->where('m_time','>=',$time)->count();
	}
}