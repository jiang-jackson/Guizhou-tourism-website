<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class XianluController extends Controller
{
	
	public function xianlu(){
		$xianluHandle = M('xianlu');
		// 经典线路
		$xianlus = $xianluHandle->order("xianlu_id desc")->limit(0,4)->select();
		$this->assign('xianlus',$xianlus);
		// 自然之旅
		$nature = $xianluHandle->order("xianlu_id desc")->limit(5,4)->select();
		$this->assign('nature',$nature);

		// cultrue文化之旅
		$cultrue = $xianluHandle->order("xianlu_id")->limit(0,4)->select();
		$this->assign('cultrue',$cultrue);

		// study 研学之旅
		$study = $xianluHandle->limit(6,4)->select();
		$this->assign('study',$study);

		// redTour 红色之旅
		$redtour = $xianluHandle->limit(3,4)->select();
		$this->assign('redtour',$redtour);




		$this->display("Xianlu:xianlu");
	}
}