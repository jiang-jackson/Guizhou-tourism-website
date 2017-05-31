<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class CateController extends Controller
{
	
	public function cate(){
		
      //景点
		$jingdianHandle = M('jingdian');
		$jingdians = $jingdianHandle->limit(4)->select();
		$this->assign("jingdians",$jingdians);

		

//美食
		$meishiHandle = M("meishi");
		$cates = $meishiHandle->order("id desc")->limit(0,3)->select();
		$this->assign("cates",$cates);

		$catelists = $meishiHandle->limit(0,4)->select();
		$this->assign("catelists",$catelists);


		$this->display("Cate:cate");
	}

	
}