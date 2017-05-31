<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class JingdianController extends Controller
{
	
	public function jingdian(){
		$jingdianHandle = M('jingdian');
		$jingdians = $jingdianHandle->select();
		$this->assign("jingdians",$jingdians);
		$meijing = $jingdianHandle->order('jingdian_id desc')->limit(4)->select();
		$this->assign("meijing",$meijing);
		$meijingz = $jingdianHandle->limit(10,4)->select();
		$this->assign("meijingz",$meijingz);

		// 旅游线路攻略
		$xianluHandle = M("xianlu");
		$xianlus = $xianluHandle->limit(10)->select();
		$this->assign("xianlus",$xianlus);
		//美食

		$meishiHandle = M("meishi");
		$cates = $meishiHandle->order("id desc")->limit(0,10)->select();
		$this->assign("cates",$cates);

		$this->display("Jingdian:jingdian");
	}
	
}