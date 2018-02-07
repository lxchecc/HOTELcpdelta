<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\Model\News as NewsModel;
//消息管理

class News extends controller
{
	public $news;
	public function __construct()
	{
		parent::__construct();
		$this->news = new NewsModel();
	}
	public function guestBook()
	{
		$res = $this->news->newselect();
		foreach ($res as $key => $value) {
			$time = $value['e_time'];
			$time = date('Y-m-d H:i:s',$time);
			$res[$key]['e_time'] = $time;
		}
		$this->assign('res',$res);
		if ($_POST){
			$lcc = $_POST['lcc'];
			if ($lcc == 3){
				$eid = $_POST['eid'];
				$del = $this->news->delnew($eid);
				if (!$del){
					echo 1;
				} 
			}
		}
		return $this->fetch();
	}
}