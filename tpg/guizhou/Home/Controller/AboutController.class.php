<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class AboutController extends Controller
{
	
	public function about(){
		$this->display("About:about");
	}
}