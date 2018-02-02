<?php
namespace app\index\controller;
use think\Controller;
class Gallery extends Controller
{
	public function Gallery()
	{
		return $this->fetch();
	}
}