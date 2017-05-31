<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html  manifest="worker.appcache" ><!--zh-CN中文-->
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
      <link rel="stylesheet" type="text/css" href="/tpg/Public/te/normalize.css">
  <!-- <link rel="stylesheet" type="text/css" href="./te/default.css"> -->
    <title>贵州旅游</title>
    <link rel="icon" href="/tpg/Public/style/image/1.ico">
    <link href="/tpg/Public/style/css/bootstrap.css" rel="stylesheet">
    <link href="/tpg/Public/style/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/tpg/Public/style/css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/tpg/Public/style/css/head.css"/>
    <link rel="stylesheet" type="text/css" href="/tpg/Public/style/css/foot.css"/>
   <!-- <link rel="stylesheet" type="text/css" href="style/css/zishiying.css"/> -->
   <link rel="stylesheet" type="text/css" href="/tpg/Public/style/css/animate.css"/>
    <script src="/tpg/Public/style/js/jquery.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src="/tpg/Public/style/js/respond.min.js"></script>
    <script src="/tpg/Public/style/js/foot.js" type="text/javascript" charset="utf-8"></script>
    <script src="/tpg/Public/style/js/bootstrap.min.js"></script>
    <script src="/tpg/Public/style/js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="/tpg/Public/style/js/wow.min.js"></script>

   
     <!--[if lt IE 9]>
    <script src="style/js/html5shiv.js"></script>
    <script src="style/js/respond.min.js"></script>
    <![endif]-->
    
    
        <!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="style/css/bootstrap-ie6.css">
  <![endif]-->
   <!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie.css">
<![endif]-->
   
  </head>
  <body>
  <!-- <div id="mydiv"> -->
  <div>
    
 
  	<!--最顶部-->
  <div class="max-top wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
  	 <div class="container">
  	 <div class="left">
  	 	   <span >
  	 	   	  欢迎浏览贵州旅游网站!
  	 	   </span>
  	 </div>
  	 <div class="right">
  	 	 <a href="/tpg/home/Login/login" class="index_ico index_ico1">登录</a>
  	 	 <a href="/tpg/home/login/register" class="index_ico">注册</a>
  	 </div>
   </div>
  </div>
  <!--最顶部-->
  <!--header-->
  <div class="header">
  	   <div class="container">
  	   	      <div class="left wow bounceInRight" data-wow-duration="8s">
  	   	      	<a href="/tpg/"><img src="/tpg/Public/style/image/logo.jpg"></a>
  	   	      </div>
  	   	      <div class="search wow bounceInDown" >
  	   	      	  <form id="myaudio">
  	   	      	   	    <div class="nowcity">
  	   	      	   	    <a href="javascript:;">
  	   	      	   	  	  <span class="city-m" >毕节</span>
  	   	      	   	  	  <i></i>
  	   	      	   	  	  <div class="city-xuan">
  	   	      	   	  	  	<ul>
  	   	      	   	  	  		<li class="cityone active"><span>热门城市</span></li>
  	   	      	   	  	  		<!--<li class="citytwo"><span>ABCD</span></li>
  	   	      	   	  	  		<li class="citythree"><span>EFGH</span></li>
  	   	      	   	  	  		<li class="cityfore"><span>JKL</span></li>
  	   	      	   	  	  		<li class="cityfour"><span>MNOPQ</span></li>
  	   	      	   	  	  		<li class="citysix"><span>STW</span></li>
  	   	      	   	  	  		<li class="cityseven"><span>XYZ</span></li>-->
  	   	      	   	  	  	</ul>
  	   	      	   	  	  	<div class="city city1">
  	   	      	   	  	  		<span>贵阳</span>
  	   	      	   	  	  		<span>凯里</span>
  	   	      	   	  	  		<span>安顺</span>
  	   	      	   	  	  		<span>西江</span>
  	   	      	   	  	  		<span>六盘水</span>
  	   	      	   	  	  		<span>荔波</span>
  	   	      	   	  	  		<span>遵义</span>
  	   	      	   	  	  		<span>都匀</span>
  	   	      	   	  	  		<span>铜仁</span>
  	   	      	   	  	  		<span>黔东南</span>
  	   	      	   	  	  		<span>南京</span>
  	   	      	   	  	  		<span>厦门</span>
  	   	      	   	  	  		<span>金华</span>
  	   	      	   	  	  		<span>香港</span>
  	   	      	   	  	  		<span>青岛</span>
  	   	      	   	  	  		<span>黄山</span>
  	   	      	   	  	  		<span>无锡</span>
  	   	      	   	  	  		<span>三亚</span>
  	   	      	   	  	  		<span>大连</span>
  	   	      	   	  	  		<span>天津</span>
  	   	      	   	  	  		<span>深圳</span>
  	   	      	   	  	  		<span>哈尔滨</span>
  	   	      	   	  	  	</div>
  	   	      	   	  	  </div>
  	   	      	   	    </a>
  	   	      	   </div>
  	   	      	        <input type="text" style="width:0px;color:rgba(255,255,255,0);border:none;">
  	   	      	        	
  	   	      	        
  	   	      	   	    <input type="text" placeholder="请输入您的关键词" id="searchtpg">
  	   	      	   	    <input type="button" name="" id="btnaudio" value="搜索" style="margin-left:-1px;"/>

  	   	      	   	   
        
  	   	      	   	    <script>
  	   	      	   	     //输入关键字后显示音乐特效
  	   	      	   	    	var myaudio = document.getElementById("myaudio");
  	   	      	   	    	var search = document.getElementById("searchtpg");
  	   	      	   	    	var btnaudio = document.getElementById("btnaudio");
  	   	      	   	    	console.log(search);


  	   	      	   	    	 // 键盘事件
                        search.onkeydown = function(event){
                        	
                 	
                 	    if(event.keyCode!=13){
                               return
                            }else{

                                 texts();

                                 }

                        }


                        btnaudio.onclick = index_btn;
                        function index_btn(){
                        	texts();
                        	
                           }


  	   	      	   	    	var audio = document.createElement("audio");
  	   	      	   	    	var srcs = "";
                           
  	   	      	   	    	function texts(){
  	   	      	   	    		//动态创建audio标签
  	   	      	   	    		
  	   	      	   	     	
                	        var value1 = search.value;
                	        if (value1=="音乐"||value1=="乐"||value1=="夜郎古国"||value1=="夜郎"||value1=="贵"||value1=="贵州"||value1=="黔") { 
                	        	 srcs = "/tpg/Public/yelangguguo.mp3";
                	        	 musicList(srcs);
                	        	
                	        	}else if (value1=="水"||value1=="黄果树瀑布"||value1=="黄果树"||value1=="瀑布"||value1=="南江大峡谷"||value1=="南江"||value1=="红枫湖") {
 
                	        	 srcs = "/tpg/Public/shui.mp3";
                	        	musicList(srcs);
                	        	
                	        }else if (value1=="风"||value1=="兴义万峰林"||value1=="峡谷"||value1=="梵净山"||value1=="云台山"||value1=="四洞沟景区"||value1=="四洞沟") {
                	        	
                	        	 
                	        	  srcs = "/tpg/Public/fong.mp3";
                	        	   musicList(srcs);
                	        	

                	        }else if (value1=="鸟"||value1=="百里杜鹃"||value1=="威宁草海"||value1=="玉舍国家森林公园"||value1=="森林公园"||value1=="草塘千年古邑"||value1=="千年古邑") {
                	        	 
                	        	srcs = "/tpg/Public/niao.mp3";
                	        	musicList(srcs);

                	        }else{}
                            
                	        
                    
                          }


                          function musicList(src){
                          	console.log(src);
                                 audio.src = src;
                	        	 audio.setAttribute("autoplay","");
                	        	 myaudio.appendChild(audio);
                          }
                       
  	   	      	   	    
  	   	      	   	     </script>
  	   	      	 

  	   	      	   	   
  	   	      	   </form>
  	   	      	   <p id="p_text" style="margin-left:180px;">
  	   	      	   	 <span>热门：</span>
  	   	      	   	 <a href="/tpg/home/show/showjingdian?id=6" class="bcf60">百里杜鹃</a>
  	   	      	   </p>
  	   	      </div>

  	   	      <div class="rigbar right wow bounceInLeft" data-wow-duration="8s"> <img alt="" src="/tpg/Public/style/image/weixin.png">
         <div class="right-phone">
             <p>旅游服务热线</p>
             <p>0851-4567-18</p> 
             <p>最专业 最专业</p>
         </div>
    </div>
  	   </div>
  </div>
   <!--nav-->
  
<div class="nav-dao" id="mynav">
  <div  class="navbar  container-fluid ">
  <div class="container margin-nav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav wow bounceInRight">
        <li class="action"><a href="#" style="font-size: 16px;margin: 0px;z-index: 1999990;"><em></em>精选旅游目的地<i></i></a>
          <ul style="z-index: 1999990;">
              <li>
                  <dl>
                    <dt >毕节市</dt>
                    <dd><a href="/tpg/home/show/showjingdian?id=6">百里杜鹃</a></dd>
                    <dd><a href="/tpg/home/show/showjingdian?id=21">织金洞</a></dd>
                      <dd><a href="/tpg/home/show/showjingdian?id=22">威宁草海</a></dd>
                              </dl>
                  <!--<div class="menu-item">
                       <dl>
                        <dd>酒店：</dd>
                        <dd><a href="">毕节奢香大酒店</a></dd>
                        <dd><a href="">大方馨雅大酒店(毕节)</a></dd>
                        <dd><a href="">毕节亚娃酒店</a></dd>
                        <dd><a href="">黔西永贵大酒店</a></dd>
                        <dd><a href="">毕节大酒店</a></dd>
                        <dd><a href="">大方慕俄格酒店</a></dd>
                        <dd><a href="">黔西县星旗酒店</a></dd>
                                        
                       </dl>
                       <dl>
                        <dd>酒店星级：</dd>
                        <dd><a href="">普通酒店</a></dd>
                        <dd><a href="">三星级酒店</a></dd>
                        <dd><a href="">四星级酒店</a></dd>
                        <dd><a href="">五星级酒店</a></dd>
                       </dl>
                                    
                                      <dl>
                                          <dd>行程预算：</dd>
                                         <dd><a href="">¥600-¥1000</a></dd>
                                         <dd><a href="">¥1000-¥1500</a></dd>
                                         <dd><a href="">¥1500-¥2000</a></dd>
                                         <dd><a href="">¥2000以上</a></dd>
                                      </dl>
                                      
                                      <dl>
                                          <dd>旅游专题：</dd>
                                         <dd><a href="">季节性旅游专题</a></dd>
                                         <dd><a href="">暑期特别专题</a></dd>
                                         <dd><a href="">婚礼蜜月专题</a></dd>
                                         <dd><a href="">家庭亲子专题</a></dd>
                                         <dd><a href="">观光旅游专题</a></dd>
                                         <dd><a href="">一价全包专题</a></dd>
                                      </dl>
                  </div>-->
              </li>
              <li>
                  <dl>
                    <dt >安顺市</dt>
                    <dd><a href="/tpg/home/show/showjingdian?id=2">黄果树瀑布</a></dd>
                                  <dd><a href="/tpg/home/show/showjingdian?id=13">龙宫风景区</a></dd>
                                  
                  </dl>
                   <!--<div class="menu-item">
                       <dl>
                        <dd>旅游路线：</dd>
                        <dd><a href="">自由行</a></dd>
                        <dd><a href="">跟团游</a></dd>
                        <dd><a href="">当地游</a></dd>
                       </dl>
                       <dl>
                        <dd>主题游：</dd>
                        <dd><a href="">私家小团</a></dd>
                        <dd><a href="">亲子游</a></dd>
                        <dd><a href="">摄影婚纱</a></dd>
                        <dd><a href="">自驾游</a></dd>
                       </dl>
                                       <dl>
                                        <dd>酒店：</dd>
                                       <dd><a href="">IU酒店安顺镇宁黄果树景区旅客中心店</a></dd>
                                       <dd><a href="">安顺顺兴酒店</a></dd>
                                       <dd><a href="">安顺宝山酒店新天地店</a></dd>
                                        <dd><a href="">安顺凯锐斯主题酒店</a></dd>
                                        
                                    </dl>
                  </div>-->
              </li>
              <li>
                  <dl>
                    <dt >贵阳市</dt>
                    <dd><a href="/tpg/home/show/showjingdian?id=17">红枫湖景区</a></dd>
                    <dd><a href="/tpg/home/show/showjingdian?id=18">天河潭</a></dd>
                    <dd><a href="/tpg/home/show/showjingdian?id=14">青岩古镇</a></dd>
                   
                  </dl>
                   <!--<div class="menu-item">
                       <dl>
                                        <dd>旅游路线：</dd>
                                       <dd><a href="">自由行</a></dd>
                                      <dd><a href="">跟团游</a></dd>
                                      <dd><a href="">当地游</a></dd>
                                    </dl>
                                   <dl>
                                    <dd>主题游：</dd>
                                       <dd><a href="">私家小团</a></dd>
                                      <dd><a href="">亲子游</a></dd>
                                      <dd><a href="">摄影婚纱</a></dd>
                                     <dd><a href="">自驾游</a></dd>
                                 </dl>
                                 <dl>
                                        <dd>酒店：</dd>
                                      <dd><a href="">IU酒店安顺镇宁黄果树景区旅客中心店</a></dd>
                                       <dd><a href="">安顺顺兴酒店</a></dd>
                                       <dd><a href="">安顺宝山酒店新天地店</a></dd>
                                        <dd><a href="">安顺凯锐斯主题酒店</a></dd>
                                    </dl>
                  </div>-->
              </li>
              <li>
                  <dl>
                    <dt >遵义市</dt>
                    
                    <dd><a href="/tpg/home/show/showjingdian?id=23">遵义会议会址</a></dd>
                  </dl>
                  <!-- <div class="menu-item">
                        <dl>
                                        <dd>旅游路线：</dd>
                                       <dd><a href="">自由行</a></dd>
                                      <dd><a href="">跟团游</a></dd>
                                      <dd><a href="">当地游</a></dd>
                                    </dl>
                                   <dl>
                                    <dd>主题游：</dd>
                                       <dd><a href="">私家小团</a></dd>
                                      <dd><a href="">亲子游</a></dd>
                                      <dd><a href="">摄影婚纱</a></dd>
                                     
                                     <dd><a href="">自驾游</a></dd>
                                 </dl>
                                 <dl>
                                        <dd>酒店：</dd>
                                       <dd><a href="">IU酒店安顺镇宁黄果树景区旅客中心店</a></dd>
                                       <dd><a href="">安顺顺兴酒店</a></dd>
                                       <dd><a href="">安顺宝山酒店新天地店</a></dd>
                                        <dd><a href="">安顺凯锐斯主题酒店</a></dd>
                                    </dl>
                  </div>-->
              </li>
              <li>
                  <dl>
                    <dt >兴义市</dt>
                    <dd><a href="/tpg/home/show/showjingdian?id=24">万峰林</a></dd>
                    <dd><a href="/tpg/home/show/showjingdian?id=25">马岭河峡谷</a></dd>
                  </dl>
                   <!--<div class="menu-item">
                       <dl>
                                        <dd>旅游路线：</dd>
                                       <dd><a href="">自由行</a></dd>
                                      <dd><a href="">跟团游</a></dd>
                                      <dd><a href="">当地游</a></dd>
                                    </dl>
                                   <dl>
                                    <dd>主题游：</dd>
                                       <dd><a href="">私家小团</a></dd>
                                      <dd><a href="">亲子游</a></dd>
                                      <dd><a href="">摄影婚纱</a></dd>
                                    
                                     <dd><a href="">自驾游</a></dd>
                                 </dl>
                                 <dl>
                                        <dd>酒店：</dd>
                                       <dd><a href="">兴义万峰林纳山舍客栈</a></dd>
                                       <dd><a href="">兴义市伍拾陆个民族风格酒店</a></dd>
                                       <dd><a href="">兴义富豪酒店</a></dd>
                                        <dd><a href="">兴义皇冠酒店</a></dd>
                                        <dd><a href="">黔西南州富康国际酒店</a></dd>
                                        
                                    </dl>
                  </div>-->
              </li>
          </ul>
 <script src="/tpg/Public/danmaku.js"></script>



<link rel='stylesheet' href='/tpg/Public/more/css/style.css' media='screen' />
<script src="/tpg/Public/more/js/jquery.min.js"></script>
<script src="/tpg/Public/more/js/blocksit.min.js"></script>
<script>
$(document).ready(function() {
	 
	
	//blocksit define
	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 4,
			offsetX: 8,
			offsetY: 8,
			blockElement: '.grid'
		});
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 1100) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 1100;
			col = 4;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 8,
				offsetY: 8
			});
		}
	});
});
</script>
<style type="text/css" media="screen">
	.btnimg{
			position: absolute;z-index: 1003;width: 600px;height: 300px;top: 200px;px;cursor: pointer;
		}
		.btnimg div{
			position: absolute;
			top: 100px;
			width: 60px;
			height: 60px;
			text-align: center;
			line-height: 60px;
			font-size: 56px;
			color: rgba(255,255,255,0.3);

			display: none;

		}
		.btnimg:hover div{
			display:block; 
		}
		.btnimg div:hover{
			color: rgba(255,255,255,1);
			
		}
		#pre{
            left: 8px;
		}
		#next{
			right: 8px;
		}
</style>

<li ><a href="/tpg/">旅游首页 <span class="sr-only">(current)</span></a></li>
        <li ><a href="/tpg/home/about/about">关于贵州</a></li>
        <li><a href="/tpg/home/jingdian/jingdian">旅游景点</a></li>
        <li class="active"><a href="/tpg/home/xianlu/xianlu">时尚线路</a></li>
        <li><a href="/tpg/home/cate/cate">舌尖美食</a></li>
        <li><a href="/tpg/home/hotels/hotel">酒店信息</a></li>
        
        <li><a href="/tpg/Home/Message/message">留言板</a></li>
        <li><a href="/tpg/admin.php">后台管理</a></li>
      
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</div>
  <!--nav-->

	<!---头部以下部分-->
<div style="width: 1100px;height: 300px;margin:180px auto 0px;">
<!--轮播图-->
   <div style="height: 300px;overflow: hidden;float:left;">
		    
		        <ul id="slides">
		    	<li><a href="/tpg/home/jingdian/jingdian" title="">
			    <img src="/tpg/upload/2017-03-30/58dcf406119bf.jpg" alt="" width="600" height="300">

		        </a></li>

		        <li><a href="/tpg/home/jingdian/jingdian" title="">
			    <img src="/tpg/upload/2017-03-30/58dce8cb03c9c.jpeg" alt="" width="600" height="300">
		        </a></li>

		        <li><a href="/tpg/home/jingdian/jingdian" title="">
			    <img src="/tpg/upload/2017-03-30/58dcf2c5d8b3d.jpg" alt="" width="600" height="300">
		        </a></li>

		        <li><a href="/tpg/home/jingdian/jingdian" title="">
			    <img src="/tpg/upload/2017-03-30/58dcf4e60cb43.jpg" alt="" width="600" height="300">
		        </a></li>

		        <li><a href="/tpg/home/jingdian/jingdian" title="">
			    <img src="/tpg/upload/2017-03-30/58dcf6a0d29d0.jpg" alt="" width="600" height="300">
		        </a></li>

		        <li><a href="/tpg/home/jingdian/jingdian" title="">
			    <img src="/tpg/upload/2017-03-30/58dcf7e488355.jpg" alt="" width="600" height="300">
		        </a></li>
		    </ul>

		    
		</div>
		<!-- <a href="/tpg/home/jingdian/jingdian" title=""> -->
		 <div class="btnimg" id="btnimg">
		    	<div id="pre">&lt;</div>
		    	<div id="next">&gt;</div>
		  </div>
		  <!-- </a> -->
          <!-- 轮播图 -->
		  <script type="text/javascript">
		  	$(function(){
		  		var $index = 0;
		  		var $li = $("#slides>li").length;
		  		var timerimg = setInterval(change,2000);
		  		function change(){
                   $index++;
                   if ($index==$li) {
                   	$index=0;
                   }
                   slidesimg();
		  		}
		  		

		  		$("#btnimg").mouseover(function(){
                       clearInterval(timerimg);
                       // alert('123');
		  		})

		  		$("#btnimg").mouseout(function(){
                       timerimg = setInterval(change,2000);
		  		})

		  		$("#pre").click(function(){

		  			$index--;
		  			if ($index<=0) {
		  				$index = $li;
		  			}
		  			 slidesimg();
		  		})

		  		$("#next").click(function(){
		  			change();
		  		})

		  		// 轮播图的实现
		  		function slidesimg(){
		  			$("#slides>li").eq($index).fadeIn(100).siblings("li").fadeOut(100);
		  		}
		  	})
		  </script>



		  <div style="width:500px;height:300px;float:right;position:relative;">
		  	  

              
       
          
            
                    <div class="panel panel-primary"  style="position: absolute;left:0px;width:520px;height:300px;">
                        <div class="panel-body" style="width:520px;height:240px;">
                            <div id="animation" style="height:240px;">
                            <video src="/tpg/Public/guizhou.mp4" height="300" width="500" id="myvideo" loop="" style="margin-top: -20px;z-index:1009;"></video>
                            	
                            </div>
                           
                            <div class="input-group" style="margin-top: 6px;">
                                <span class="input-group-btn">
                                    <button id="play" class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-play"></span>
                                    </button>
                                    <button id="pause" class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-pause"></span>
                                    </button>
                                    <button id="stop" class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-stop"></span>
                                    </button>
                                </span>
                                <input class="form-control" id="danmaku-text" />
                                <span class="input-group-btn">
                                    <button id="go" class="btn btn-default" type="button">
                                        发表
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                   
              
        <script>
            var player = danmaku.attach(document.getElementById('animation'));
            // player.put('贵州旅游宣传片', 0);
            player.put('多彩贵州欢迎你，贵州宣传片', 110);
            // player.put('贵州旅游宣传片', 140);
            // player.put('贵州旅游宣传片', 150);
            player.setTickRate(100);
            window.onload = function() {
            	var myvideo = document.getElementById('myvideo');
            	var play1 = document.getElementById('play');
            	var  pause1 = document.getElementById('pause');
            	var danmutext =  document.getElementById('danmaku-text');
                play1.onclick = function() {
                    player.play();
                    myvideo.play();
                }
                pause1.onclick = function() {
                    player.pause();
                    myvideo.pause();
                }
                document.getElementById('stop').onclick = function() {
                    player.stop();
                }
                document.getElementById('go').onclick = function() {
                	
                     texts();

                }
                function texts(){
                	var value1 = danmutext.value;
                    player.put(value1, player.getTick()); 
                    danmutext.value="";
                }
                // 键盘事件
                 danmutext.onkeydown = function(event){
                 	
                 	if(event.keyCode!=13){
                        return
                   }else{
                   	   texts();

                   }

                 }
            }
        </script>
                    

  
  
</div>
		  </div>



	
</div>

<!-- Content -->
<section id="wrapper" style="margin: auto;clear: both;">
	
<div id="container">
<?php if(is_array($jingdians)): $i = 0; $__LIST__ = $jingdians;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jingdian): $mod = ($i % 2 );++$i;?><div class="grid">
		<div class="imgholder">
		  <a href="/tpg/home/show/showjingdian?id=<?php echo ($jingdian["jingdian_id"]); ?>" title="">
			<img src="<?php echo ($jingdian["jingdian_image"]); ?>" />
		</a>
		</div>
		<strong><span style="color: blue;">景点 ：</span><?php echo ($jingdian["jingdian_name"]); ?></strong>
		<p><span style="color: #00ffff;font-size: 20px;">特色 : </span><?php echo ($jingdian["jingdian_trait"]); ?></p>
		<div class="meta">At <span style="color: red;"><?php echo ($jingdian["jingdian_site"]); ?></span></div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>


<?php if(is_array($xianlus)): $i = 0; $__LIST__ = $xianlus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xianlu): $mod = ($i % 2 );++$i;?><div class="grid">
		<div class="imgholder">
		  <a href="/tpg/home/show/showxianlu?id=<?php echo ($xianlu["xianlu_id"]); ?>" title="">
			<img src="<?php echo ($xianlu["xianlu_image"]); ?>" />
		</a>
		</div>
		<strong><span style="color: #7cfc00;">主题 ：</span><?php echo ($xianlu["xianlu_name"]); ?></strong>
		<p><h3>线路 ：</h3><?php echo ($xianlu["xianlu_content"]); ?></p>
		<div class="meta">Price : <span style="color: red;"><?php echo ($xianlu["xianlu_price"]); ?></span></div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
	<!-- <div class="grid">
		<div class="imgholder">
			<img src="images/img27.jpg" />
		</div>
		<strong>Sunset Lake</strong>
		<p>A peaceful sunset view...</p>
		<div class="meta">by j osborn</div>
	</div> -->
	<!-- <div class="grid">
		<div class="imgholder">
			<img src="images/img26.jpg" />
		</div>
		<strong>Bridge to Heaven</strong>
		<p>Where is the bridge lead to?</p>
		<div class="meta">by SigitEko</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img15.jpg" />
		</div>
		<strong>Autumn</strong>
		<p>The fall of the tree...</p>
		<div class="meta">by Lars van de Goor</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img23.jpg" />
		</div>
		<strong>Winter Whisper</strong>
		<p>Winter feel...</p>
		<div class="meta">by Andrea Andrade</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img17.jpg" />
		</div>
		<strong>Light</strong>
		<p>The only shinning light...</p>
		<div class="meta">by Lars van de Goor</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img22.jpg" />
		</div>
		<strong>Rooster's Ranch</strong>
		<p>Rooster's ranch landscape...</p>
		<div class="meta">by Andrea Andrade</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img16.jpg" />
		</div>
		<strong>Autumn Light</strong>
		<p>Sun shinning into forest...</p>
		<div class="meta">by Lars van de Goor</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img21.jpg" />
		</div>
		<strong>Yellow cloudy</strong>
		<p>It is yellow cloudy...</p>
		<div class="meta">by Zsolt Zsigmond</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img28.jpg" />
		</div>
		<strong>Herringfleet Mill</strong>
		<p>Just a herringfleet mill...</p>
		<div class="meta">by Ian Flindt</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img2.jpg" />
		</div>
		<strong>Battle Field</strong>
		<p>Battle Field for you...</p>
		<div class="meta">by Andrea Andrade</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img24.jpg" />
		</div>
		<strong>Sundays Sunset</strong>
		<p>Beach view sunset...</p>
		<div class="meta">by Robert Strachan</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img19.jpg" />
		</div>
		<strong>Sun Flower</strong>
		<p>Good Morning Sun flower...</p>
		<div class="meta">by Zsolt Zsigmond</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img5.jpg" />
		</div>
		<strong>Beach</strong>
		<p>Something on beach...</p>
		<div class="meta">by unknown</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img25.jpg" />
		</div>
		<strong>Flowers</strong>
		<p>Hello flowers...</p>
		<div class="meta">by R A Stanley</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img20.jpg" />
		</div>
		<strong>Alone</strong>
		<p>Lonely plant...</p>
		<div class="meta">by Zsolt Zsigmond</div>
	</div> --> <!---->
</div>
</section>








<!-- 页尾开始 -->
<div class="footer wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;background-color: gray;">
  <div class="content container" style="">
    <div class="footer-link">
      
      <!-- 热门自由行div.hotziyou结束 -->
   
    <!-- div.footer-link结束 --> 
    <div class="Contact" >
            <div><img src="/tpg/Public/style/image/logo_button.jpg" alt=""></div>
            <div>
            服务联系<br>
            企业电话: 0851-4567-18<br>
            服务QQ：1591631526<br>
            服务时间：9:00-23:30
            </div>
      </div><!--  div.Contact结束 -->
        <div class="About">
             <p>
              <a href="/tpg/home/about/about" target="_blank">关于我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="/tpg/Home/Message/message" target="_blank">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="#" target="_blank">支付方式</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="/tpg/home/login/register" target="_blank">法律声明</a></p>
            </p>
            <div class="fl">
                <p>版权所有：Copyright © 影琪集团　　粤ICP备15019244号</p>
                <p>公司地址：中国贵州贵阳市福田区南园路90号</p>
            </div>
        </div> <!-- div..About结束 -->
  </div>
  <!--  div.content结束 --> 
</div>
</div>
<!-- div.footer结束 -->
</body>
</html>