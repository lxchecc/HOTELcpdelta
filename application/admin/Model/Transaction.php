<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Transaction extends Model
{
	//查询所有的订单
	public function orderselect()
	{
		return Db::table('hotel_order o,hotel_room r')->where('o.rid=r.rid')->select();
	}
	//查询和传过来的oid相同的订单
	public function reselect($oid)
	{
		return Db::table('hotel_order')->where("oid",$oid)->select();
	}
	//查询当前订单的个人信息
	public function userselect($uid)
	{
		return Db::table('hotel_user')->where("id",$uid)->select();
	}
	//查询当前订单的房间信息
	public function roomselect($rid)
	{
		return Db::table('hotel_room')->where('rid',$rid)->select();
	}
	//查询一共有多少订单
	public function count()
	{
		return Db::table('hotel_order')->where('oid','<>','0')->count();
	}
	//查询今天一共有多少订单
	public function today()
	{
		return Db::table('hotel_order o,hotel_room r')->whereTime('create_time','today')->where('o.rid=r.rid')->select();
	}
	//查询成交总额
	public function money()
	{
		return Db::table('hotel_order')->where('o_state','1')->sum('o_money');
	}
	//查询当天成交总额
	public function todaymoney()
	{
		return Db::table('hotel_order')->where('o_state','1')->whereTime('create_time','today')->sum('o_money');
	}
	//查询所有的餐厅订单
	public function ctdd()
	{
		return Db::table('hotel_sumption s,hotel_user u,hotel_rest r')->where('u.id=s.uid')->where('s.restid=r.cid')->select();
	}
	//查询该订单的所有信息
	public function yinfo($yid)
	{
		return Db::table('hotel_sumption s,hotel_user u,hotel_rest r')->where('yid',$yid)->where('s.uid=u.id')->where('s.restid=r.cid')->select();
	}
	//查询支付成功的消费总额
	public function ctze()
	{
		return Db::table('hotel_sumption')->where('y_status','1')->sum('y_money');
	}
	//查询今日消费总额
	public function todayxf()
	{
		return Db::table('hotel_sumption')->where('y_status','1')->whereTime('ru_time','today')->sum('y_money');
	}
	//查询今天一共消费了几笔
	public function todaycount()
	{
		return Db::table('hotel_sumption')->where('y_status','1')->whereTime('ru_time','today')->count();
	}
	//查询今天的所有订单
	public function res()
	{
		return Db::table('hotel_sumption')->where('yid','<>','0')->whereTime('ru_time','today')->select();
	}
	//查询所有的申请退款的餐厅订单
	public function refund()
	{
		return Db::table('hotel_sumption s,hotel_user u,hotel_rest r')->where('y_refund','<>','0')->where('s.uid=u.id')->where('s.restid=r.cid')->select();
	}
	//查询今天的餐厅订单总数
	public function ctcount()
	{
		return Db::table('hotel_sumption')->where('yid','<>','0')->count();
	}
	//退款处理
	public function uprefund($id,$date)
	{
		return Db::table('hotel_sumption')->where('yid',$id)->update($date);
	}
	public function excelcount()
	{
		return Db::table('hotel_sumption')->where('yid','<>','0')->count();
	}
	//查询所有的需要退款的房间订单
	public function roomrefund()
	{
		return Db::table('hotel_order o,hotel_user u,hotel_room r')->where('o_refund','<>','0')->where('o.uid=u.id')->where('o.rid=r.rid')->select();
	}
	public function roomupdate($id,$data)
	{
		return Db::table('hotel_order')->where('oid',$id)->update($data);
	}
}