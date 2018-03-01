<?php
namespace app\index\controller;
use app\index\model\Menu;
use app\index\model\Menuche;
use think\Controller;
use think\Request;
use think\Db;
use think\Session;

class Meal extends Controller
{
    //酒店房间餐模板
    public function meal()
    {
    	//$meal = Menu::all();
    	$list = Menu::paginate(8,1000);
    	$this->assign('list',$list);
    	//$this->assign('meal',$meal);
        $uid = Session::get('uid');
        $user = Db::name('user')->where('id',$uid)->find();
        $this->assign('user',$user);    	
        return $this->fetch();

    }
    //添加到菜单
    public function addMeal(Request $request)
    {
    	$mid = $request->param('mid');
    	$uid = Session('uid');
    	$data['mid'] = $mid;
    	$data['uid'] = $uid;
        $money = Db::name('menu')->where('mid',"$mid")->find();
        $data['m_money'] = $money['m_money'];
    	$result = Menuche::create($data);
    	if(empty($result)){
    		echo 1;
    	}
    } 
}