<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	// 网站首页面
    public function index(){
    	$jingdian = M("jingdian");
    	$jingdians = $jingdian->limit(0,8)->select();
    	$this->assign("jingdians",$jingdians);
    	// 每周爆款
    	$mzjingdians = $jingdian->order("jingdian_id desc")->limit(8)->select();
    	$this->assign("mzjingdians",$mzjingdians);
        // print_r($mzjingdian)

    	// 组合游玩 线路
    	$xianluHandle = M('xianlu');
    	$xianlus = $xianluHandle->order("xianlu_id")->limit(8)->select();
    	$this->assign('xianlus',$xianlus);
    	// 精品游记
    	$jpjingdians = $jingdian->limit(10,4)->select();
    	$this->assign("jpjingdians",$jpjingdians);
        $this->display("Index:index");
    }
}