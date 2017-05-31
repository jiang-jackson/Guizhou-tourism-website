<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class HotelsController extends Controller
{
	
	public function hotel(){
		// 酒店
		$hotelHandle = M('jiudian');
		$hotels = $hotelHandle->select();
		$this->assign("hotels",$hotels);
		// 景点

		$jingdianHandle = M('jingdian');
		$jingdians = $jingdianHandle->limit(5)->select();
		$this->assign("jingdians",$jingdians);

		// 线路
		$xianluHandle = M('xianlu');
		// 经典线路
		$xianlus = $xianluHandle->order("xianlu_id desc")->limit(0,5)->select();
		$this->assign('xianlus',$xianlus);


		// 酒店排行
		
		$hotelps = $hotelHandle->order("jiudian_id desc")->select();
		$this->assign("hotelps",$hotelps);

		//美食
		$meishiHandle = M("meishi");
		$cates = $meishiHandle->limit(3)->select();
		$this->assign("cates",$cates);


		$this->display("Hotels:hotel");
	}

	
}