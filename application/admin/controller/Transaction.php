<?php
namespace app\admin\controller;
use think\Controller;
use PHPExcel_IOFactory;
use PHPExcel;
use PHPExcel_Style_Color;
use PHPExcel_Style_Fill;
use think\Db;
use app\admin\model\Transaction as Transaction_Model;
//交易管理

class Transaction extends controller
{
	public $transaction;
	public function __construct()
	{
		parent::__construct();
		$this->transaction = new Transaction_Model();
		$this->excel = new \PHPExcel();
	}
	public function amounts()
	{
		//查询出今天所交易的全部订单
		$res = $this->transaction->today();
		//查询成交额
		$money = $this->transaction->money();
		//查询今天的成交金额
		$todaymoney = $this->transaction->todaymoney();
		$time = time();
		$time = date('Y-m-d',$time);
		//查询所有的订单总数
		$dd = $this->transaction->count();
		$this->assign('dd',$dd);
		$this->assign('time',$time);
		$this->assign('todaymoney',$todaymoney);
		$this->assign('money',$money);
		$this->assign('res',$res);
		return $this->fetch();
	}
	public function refund()
	{
		//查询所有需要退款和退款已完成的订单
		$res = $this->transaction->roomrefund();
		//接收post传过来的值  进行退款
		if ($_POST){
			$id = $_POST['oid'];
			$data = ['o_refund'=>2];
			$roomupdate = $this->transaction->roomupdate($id,$data);
			if ($roomupdate){
				return 1;
			} else{
				return 2;
			}
		}
		$this->assign('res',$res);
		return $this->fetch();
	}
	public function refundDetailed()
	{
		//接收传过来的值
		$oid = $_GET['oid'];
		//查询与传过来的oid相同的订单
		$res = $this->transaction->reselect($oid)[0];
			$rid = $res['rid'];
			$uid = $res['uid'];
		//查询该订单的个人信息和房间信息
		$user = $this->transaction->userselect($uid);
		// dump($user);
		$room = $this->transaction->roomselect($rid);
		foreach ($user as $key => $value) {
			$user = $value;
		}
		//分配变量
		$this->assign('user',$user);
		foreach ($room as $key => $value) {
			$room = $value;
		}
		$this->assign('room',$room);
		$this->assign('res',$res);
		return $this->fetch();
	}
	public function menu()
	{
		//查询所有的订单
		$res = $this->transaction->orderselect();
		foreach ($res as $key => $value) {
			$retime = $value['ru_time'];
			$retime = date('Y-m-d H:i:s',$retime);
			$res[$key]['ru_time'] = $retime;
			$tuitime = $value['tui_time'];
			$tuitime = date('Y-m-d H:i:s',$tuitime);
			$res[$key]['tui_time'] = $tuitime;
		}
		//查询一共有多少订单
		$count = $this->transaction->count();
		$this->assign('count',$count);
		$this->assign('res',$res);
		return $this->fetch();
	}
	public function ctmenu()
	{
		//查询所有的餐厅订单
		$res = $this->transaction->ctdd();
		foreach ($res as $key => $value) {
			$time = $value['ru_time'];
			$time = date('Y-m-d H:i:s',$time);
			$res[$key]['ru_time'] = $time;
		}
		$ctcount = $this->transaction->ctcount();
		$this->assign('count',$ctcount);
		$this->assign('res',$res);
		return $this->fetch();
	}
	public function ctamounts()
	{
		// 查询支付成功的消费总额
		$ctze = $this->transaction->ctze();
		//查询今日消费总额
		$todayxf = $this->transaction->todayxf();
		//查询今天一共消费了几笔
		$todaycount = $this->transaction->todaycount();
		//查询今天的所有订单
		$res = $this->transaction->res();
		$time = date("Y-m-d",time());
		//分配变量
		$this->assign('time',$time);
		$this->assign('res',$res);
		$this->assign('todaycount',$todaycount);
		$this->assign('todayxf',$todayxf);
		$this->assign('ctze',$ctze);
		return $this->fetch();
	}
	public function ctxx()
	{
		//接收get传过来的值
		$yid = $_GET['yid'];
		//查询当前订单的所有信息
		$yinfo = $this->transaction->yinfo($yid)[0];
		$this->assign('yinfo',$yinfo);
		return $this->fetch();
	}
	public function ctrefund()
	{
		//查询所有待审核的退款订单
		$res = $this->transaction->refund();
		//退款处理
		if ($_POST){
			$yid = $_POST['yid'];
			$date = ['y_refund'=>2];
			$up = $this->transaction->uprefund($yid,$date);
			if ($up){
				return 1;
			}else{
				return 2;
			}
		}
		$this->assign('res',$res);
		return $this->fetch();
	}
	//excel 表格
	public function excel()
	{
		//获取所有餐厅订单数据  插入表格
		$res = $this->transaction->ctdd();
		$path = dirname(__FILE__);
		// 获得当前活动sheet的操作对象
		$phpSheet = $this->excel->getActiveSheet();
		$phpSheet->setTitle('demo');
		//设置某一行高度
		$phpSheet->getRowDimension('1')->setRowHeight(31.5);
		$phpSheet->getRowDimension('2')->setRowHeight(20);
		//设置某一行上下居中
		$phpSheet->getStyle('A1')->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$phpSheet->getStyle('A2:H2')->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
		//设置某一行宽度
		$phpSheet->getColumnDimension('B')->setWidth(20);
		$phpSheet->getColumnDimension('C')->setWidth(20);
		$phpSheet->getColumnDimension('D')->setWidth(20);
		$phpSheet->getColumnDimension('G')->setWidth(30);
		//设置某一行字体颜色
		$phpSheet->getStyle( 'B')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
		$phpSheet->getStyle( 'A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
		//设置背景颜色
		$phpSheet->getStyle( 'A1:H1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
		$phpSheet->getStyle( 'A1:H1')->getFill()->getStartColor()->setARGB('FF97FFFF');
		$phpSheet->getStyle( 'A2:H2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
		$phpSheet->getStyle( 'A2:H2')->getFill()->getStartColor()->setARGB('FFC6E2FF');
		//设置标题占用A1到H1
		$phpSheet->setCellValue('A1','餐厅订单')->mergeCells("A1:H1")->getStyle('A1')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		//设置A1的字体加粗
		$phpSheet->getStyle('A1')->getFont()->setBold(true); 
		//设置A2到G2的小标题内容
		$phpSheet->setCellValue('A2','预定ID')->getStyle('A2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$phpSheet->setCellValue('B2','用户名称')->getStyle('B2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$phpSheet->setCellValue('C2','餐厅ID')->getStyle('C2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$phpSheet->setCellValue('D2','支付状态')->getStyle('D2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$phpSheet->setCellValue('E2','价格')->getStyle('E2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$phpSheet->setCellValue('F2','座位号')->getStyle('F2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$phpSheet->setCellValue('G2','时间')->mergeCells("G2:H2")->getStyle('G2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$phpSheet->getStyle('G')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		//手动设置一个数组  为添加内容提供方便
		$letter = ['A','B','C','D','E','F','G','H'];
		$count = $this->transaction->excelcount();
		//利用for循环设置每一行内容的格式
		for ($j=0; $j < 8 ; $j++) { 
      		$phpSheet->getStyle($letter[$j].'3'.':'.$letter[$j].($count+2))->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
      		$phpSheet->getStyle($letter[$j].'3'.':'.$letter[$j].($count+2))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$phpSheet->getStyle($letter[$j].'3'.':'.$letter[$j].($count+2))->getFill()->getStartColor()->setARGB('FFC1FFC1');
  		}
  		foreach ($res as $key => $value) {
			$time = $value['ru_time'];
			$time = date("Y-m-d H:i:s",$time);
			$res[$key]['ru_time'] = $time;
		}
		//利用for循环设置每一行的内容
		for ($i=0; $i <$count; $i++) { 
			$phpSheet->setCellValue('A'.($i+3),$res[$i]['yid']);
			$phpSheet->setCellValue('B'.($i+3),$res[$i]['username']);
			if ($res[$i]['restid'] == 3){
				$phpSheet->setCellValue('C'.($i+3),'自助餐');
			}elseif ($res[$i]['restid']==2){
				$phpSheet->setCellValue('C'.($i+3),'休闲套餐');
			}elseif ($res[$i]['restid'] == 1){
				$phpSheet->setCellValue('C'.($i+3),'家庭套餐');
			}elseif ($res[$i]['restid'] == 5){
				$phpSheet->setCellValue('C'.($i+3),'酒吧和休息室');
			}elseif ($res[$i]['restid'] == 4){
				$phpSheet->setCellValue('C'.($i+3),'婚礼餐厅');
			}else{
				$phpSheet->setCellValue('C'.($i+3),'户外套餐');
			}
			if ($res[$i]['y_status'] == 1){
				$phpSheet->setCellValue('D'.($i+3),'已支付');
			}else{
				$phpSheet->setCellValue('D'.($i+3),'未支付');
			}	
			$phpSheet->setCellValue('E'.($i+3),$res[$i]['y_money'].'元');
			$phpSheet->setCellValue('F'.($i+3),$res[$i]['c_seat']);
			$phpSheet->setCellValue('G'.($i+3),$res[$i]['ru_time']);
		}
		//设置文件格式
		$phpWriter = PHPExcel_IOFactory::createWriter($this->excel,'Excel2007');
		header('Content-Type:application/vnd.ms-excel');
		//文件名
		header('Content-Disposition: attachment;filename="01demo.xlsx"');
		header('Cache-Control: max-age=0');
		$phpWriter->save("php://output");
	}
}