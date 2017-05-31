<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
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
 <link href="/tpg/Public/jindian/whir_css.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      .header,.nav-dao{
        font-size: 14px;
      }
    </style>
 	

        </li>
        <li ><a href="/tpg/">旅游首页 <span class="sr-only">(current)</span></a></li>
        <li ><a href="/tpg/home/about/about">关于贵州</a></li>
        <li  class="active"><a href="/tpg/home/jingdian/jingdian">旅游景点</a></li>
        <li><a href="/tpg/home/xianlu/xianlu">时尚线路</a></li>
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


<!-- 主要内容区域 -->
<!-- <div style="height: 800px;"></div> -->
<div id="subbox">



<div class="mainbox">
<!-- <div class="title6">
<h1 id="jdt1"><a href="#" class="hover">狼巷迷谷景区</a></h1>
<h1 id="jdt2"><a href="#">小岗村景区</a></h1>
<h1 id="jdt3"><a href="#">明皇陵景区</a></h1>
<h1 id="jdt4"><a href="#">明中都皇城遗址</a></h1>
<h1 id="jdt5"><a href="#">韭山洞景区</a></h1>
<h1 id="jdt6"><a href="#">鼓楼景区</a></h1>
<h1 id="jdt7"><a href="#">龙兴寺</a></h1>
<h1 id="jdt8"><a href="#">卧牛湖</a></h1>
</div> -->

<ul class="jdpic">
<li class="jd1 wow bounceInLeft"><a href="/tpg/home/show/showjingdian?id=<?php echo ($jingdians[1]["jingdian_id"]); ?>"><img src="<?php echo ($jingdians[1]["jingdian_image"]); ?>" /><span><h2>世界上最大的天然花园---百丽杜鹃</h2><p>百里杜鹃风景名胜区，其中宽1-5公里，绵延50余公里，总面积125.8平方公里的地球上最大的原始杜鹃林带分布杜鹃花60多个品种，占世界杜鹃花种属5个亚属中的全部。最难得的一树不同花，可在一棵树上开出不同颜色的花朵，达7种之多。树龄千年的杜鹃花王，花开季节繁花万朵，独树成春，是迄今为止地球上发现的最大杜鹃花树。</p></span></a></li>
<li class="jd2 wow bounceInRight"><a href="/tpg/home/show/showjingdian?id=<?php echo ($jingdians[0]['jingdian_id']); ?>"><img src="<?php echo ($jingdians[0]["jingdian_image"]); ?>" /><span><?php echo ($jingdians[0]["jingdian_name"]); ?></span></a></li>
<li class="jd3 wow bounceInRight"><a href="/tpg/home/show/showjingdian?id=<?php echo ($jingdians[2][jingdian_id]); ?>"><img src="<?php echo ($jingdians[2]["jingdian_image"]); ?>" /><span><?php echo ($jingdians[2]["jingdian_name"]); ?></span></a></li>
<li class="jd4 wow bounceInLeft"><a href="/tpg/home/show/showjingdian?id=<?php echo ($jingdians[3]['jingdian_id']); ?>"><img src="<?php echo ($jingdians[3]["jingdian_image"]); ?>" /><span><?php echo ($jingdians[3]["jingdian_name"]); ?></span></a></li>
<li class="jd5 wow swing"><a href="/tpg/home/show/showjingdian?id=<?php echo ($jingdians[4]['jingdian_id']); ?>"><img src="<?php echo ($jingdians[4]["jingdian_image"]); ?>" /><span><?php echo ($jingdians[4]["jingdian_name"]); ?></span></a></li>
<li class="jd6 wow bounceInRight"><a href="/tpg/home/show/showjingdian?id=<?php echo ($jingdians[5]['jingdian_id']); ?>"><img src="<?php echo ($jingdians[5]["jingdian_image"]); ?>" /><span><?php echo ($jingdians[5]["jingdian_name"]); ?></span></a></li>
<li class="jd7 wow bounceInUp"><a href="/tpg/home/show/showjingdian?id=<?php echo ($jingdians[6]['jingdian_id']); ?>"><img src="<?php echo ($jingdians[6]["jingdian_image"]); ?>" /><span><?php echo ($jingdians[6]["jingdian_name"]); ?></span></a></li>
<li class="jd8 wow bounceInDown"><a href="/tpg/home/show/showjingdian?id=<?php echo ($jingdians[7]['jingdian_id']); ?>"><img src="<?php echo ($jingdians[7]["jingdian_image"]); ?>" /><span><?php echo ($jingdians[7]["jingdian_name"]); ?></span></a></li>
</ul>
<div class="more5"><a href="/tpg/home/show/more?name=jingdian">查看更多</a></div>
<p>百丽杜鹃是中国春观花、夏避暑、秋休闲、冬赏雪等生态旅游胜地</p>
</div>
</div>
<!-- <div class="position">当前位置：<a href="#">首页</a> > 资讯信息</div> -->
<div class="mainsub">
<!--左侧部分-->
<div class="left870">
<!--凤阳旅游地图-->
<div class="column4 wow bounceInDown"  data-wow-duration="1.5s" data-wow-delay='1s'>
<div class="title5"><a href="#">更多></a><h1>贵州旅游地图</h1></div>
<div class="lvmap ">
<span class="lvL"><img src="/tpg/Public/jindian/map.jpeg" width="304" height="221" /></span>
<span class="lvR">贵州是一个山川秀丽、气候宜人的省份，是迷人的“天然公园”。境内自然风光神奇秀美，山水景色千姿百态，溶洞景观绚丽多彩，野生动物奇妙无穷，文化和革命遗迹闻名遐迩；山、水、洞、林、石交相辉映，浑然一体。黄果树瀑布，位于中国贵州省安顺市镇宁布依族苗族自治县，是珠江水系打邦河的支流白水河九级瀑布群中规模最大的一级瀑布，因当地一种常见的植物“黄果树”而得名，瀑布高度为77.8米，其中主瀑高67米； 瀑布宽101米，其中主瀑顶宽83.3米。黄果树瀑布属喀斯特地貌中的侵蚀裂典型瀑布。黄果树瀑布不只一个瀑布的存在，以它为核心，在它的上游和下游20千米的河段上，共形成了雄、奇、险、秀风格各异的瀑布18个。1999年被世界吉尼斯总部评为世界上最大的瀑布群，列入世界吉尼斯记录。</span>
</div>
</div>
<!--凤阳美景-->
<div class="column4 wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay='1.5s'>
<div class="title5"><a href="/tpg/home/show/more?name=jingdian">更多></a><h1>贵州美景</h1></div>
<ul class="list9">
<?php if(is_array($meijing)): $i = 0; $__LIST__ = $meijing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><li>
       <span class="lypic"><a  href="/tpg/home/show/showjingdian?id=<?php echo ($one["jingdian_id"]); ?>"><img src="<?php echo ($one["jingdian_image"]); ?>" width="201" height="141" />
       <h4 style="text-align: center;font-weight: bolder;margin-top: 6px;"><?php echo ($one["jingdian_name"]); ?></h4>

       </a>


       </span>
        
      </li><?php endforeach; endif; else: echo "" ;endif; ?>

<!-- <li>
<span class="lypic"><a  href="#"><img src="./jindian/tianxingdong.jpg" width="201" height="141" /></a></span>
<span class="lytext"><a href="#">风景名称</a></span>
</li>
<li>
<span class="lypic"><a  href="#"><img src="./jindian/jindaoxia.jpg" width="201" height="141" /></a></span>
<span class="lytext"><a href="#">风景名称</a></span>
</li>
<li>
<span class="lypic"><a  href="#"><img src="./jindian/zhangjiang.jpg" width="201" height="141" /></a></span>
<span class="lytext"><a href="#">风景名称</a></span>
</li> -->
</ul>
</div>
<!--自驾游-->
<div class="column4 wow bounceInUp ">
<div class="title5"><a href="/tpg/home/show/more?name=jingdian">更多></a><h1>自驾游</h1></div>
<ul class="list9">
<?php if(is_array($meijingz)): $i = 0; $__LIST__ = $meijingz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$meijing): $mod = ($i % 2 );++$i;?><li>
              <span class="lypic"><a  href="/tpg/home/show/showjingdian?id=<?php echo ($meijing["jingdian_id"]); ?>"><img src="<?php echo ($meijing["jingdian_image"]); ?>" width="201" height="141" /></a></span>
          <span class="lyinfo"><?php echo ($meijing["jingdian_name"]); ?></span>
</li><?php endforeach; endif; else: echo "" ;endif; ?>

<!-- <li>
<span class="lypic"><a  href="#"><img src="./jindian/longgong.jpg" width="201" height="141" /></a></span>
<span class="lytext"><a href="#">龙宫</a></span>
<span class="lyinfo">贵州是一个山川秀丽、气候宜人的省份，是迷人的“天然公园”。境内自然风光神奇秀美，山水景色千姿百态，溶洞景观绚丽多彩</span>
</li>
<li>
<span class="lypic"><a  href="#"><img src="./jindian/qinyan.jpeg" width="201" height="141" /></a></span>
<span class="lytext"><a href="#">青岩古镇</a></span>
<span class="lyinfo">贵州是一个山川秀丽、气候宜人的省份，是迷人的“天然公园”。境内自然风光神奇秀美，山水景色千姿百态，溶洞景观绚丽多彩</span>
</li>
<li>
<span class="lypic"><a  href="#"><img src="./jindian/miaozhai.jpg" width="201" height="141" /></a></span>
<span class="lytext"><a href="#">西江千户苗寨</a></span>
<span class="lyinfo">贵州是一个山川秀丽、气候宜人的省份，是迷人的“天然公园”。境内自然风光神奇秀美，山水景色千姿百态，溶洞景观绚丽多彩</span>
</li> -->
</ul>
</div>
</div>
<!--右侧部分-->
<div class="right310">
<!--凤阳游记-->
<div class="column5 wow bounceInLeft">
<div class="title5"><a href="#"></a><h1>贵州文化</h1></div>
<div class="topnews1">
<div class="tjimg"><img src="/tpg/Public/jindian/lishijie.jpeg" width="108" height="80" /><h2 style="color:blue;margin-top:10px;">美食文化</h2></div>

<div class="tjt"><h2><a href="#">贵州李世杰雕像</a></h2><p>李世杰，贵州省黔西人，乾隆时期从小吏一直官升至兵部尚书。</p>

    </div>
</div>
<div class="clear"></div>
<ul class="list10">
<?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><li><span style="color:blue;clear:both;margin-right:20px;"><?php echo ($i); ?></span><a href="/tpg/home/show/showcate?id=<?php echo ($cate["id"]); ?>"><?php echo ($cate["meishi_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
<!--<li>·<a href="#">一个王朝的背影——风雨明皇陵</a></li>
<li>·<a href="#">阳春三月，我们去凤阳听花鼓</a></li>
<li>·<a href="#">寻幽探古，贵阳一日</a></li>
<li>·<a href="#">世界保护级别最高的“极危生物”-韭山</a></li>
<li>·<a href="#">黔西花园</a></li>
<li>·<a href="#">一个王朝的背影——风雨明皇陵</a></li>
<li>·<a href="#">阳春三月，我们去凤阳听花鼓</a></li>
<li>·<a href="#">寻幽探古，贵阳一日</a></li>
<li>·<a href="#">世界保护级别最高的“极危生物”-韭山</a></li>
<li>·<a href="#">黔西花园</a></li>-->
</ul>
</div>
<!--旅游攻略发布-->
<div class="column5 wow bounceInDown" data-wow-duration="1.5s" data-wow-delay='1s'>
<div class="title5"><a href="/tpg/home/show/more?name=xianlu">更多></a><h1>旅游攻略发布</h1></div>
<div class="topnews1">
<div class="tjimg"><img src="/tpg/Public/jindian/map1.jpeg" width="108" height="80" /></div>
<div class="tjt"><h2><a href="/tpg/home/show/more?name=xianlu">旅游线路</a></h2><p>踏着夏姑娘的脚步，我们来到2017年贵州旅游网...</p>    </div>
</div>
<div class="clear"></div>
<ul class="list10">
<?php if(is_array($xianlus)): $i = 0; $__LIST__ = $xianlus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xianlu): $mod = ($i % 2 );++$i;?><li>·<a href="/tpg/home/show/showxianlu?id=<?php echo ($xianlu["xianlu_id"]); ?>"><?php echo ($xianlu["xianlu_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
<!-- <li>·<a href="#">一个王朝的背影——风雨明皇陵</a></li>
<li>·<a href="#">阳春三月，我们去凤阳听花鼓</a></li>
<li>·<a href="#">寻幽探古，凤阳一日</a></li>
<li>·<a href="#">世界保护级别最高的“极危生物”-韭山</a></li>
<li>·<a href="#">凤阳花鼓</a></li>
<li>·<a href="#">一个王朝的背影——风雨明皇陵</a></li>
<li>·<a href="#">阳春三月，我们去凤阳听花鼓</a></li>
<li>·<a href="#">寻幽探古，凤阳一日</a></li>
<li>·<a href="#">世界保护级别最高的“极危生物”-韭山</a></li>
<li>·<a href="#">凤阳花鼓</a></li> -->
</ul>
</div>

</div>

</div>

</div>








 






 <!--main-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>贵州旅游页尾</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="/tpg/Public/style/css/foot.css" rel="stylesheet" type="text/css">
</head>

<body>


<!-- 页尾开始 -->
<div class="footer">
  <div class="content container" id="content">
    <div class="footer-link">
      <div class="hotziyou"> <span>友情链接：</span>
        <ul>
          <li> <a target="_blank" href="http://www.feiren.com">腾邦国际</a></li>
          <li><a target="_blank" href="http://www.tripadvisor.cn/">TripAdvisor</a></li>
          <li><a target="_blank" href="http://www.8264.com">户外运动</a></li>
          <li> <a href="http://www.mapbar.com/" target="_blank">地图查找</a></li>
          <li><a target="_blank" href="http://lvyou.baidu.com">百度旅游</a></li>
          <li> <a target="_blank" href="http://www.cncn.com">欣欣旅游网</a></li>
          <li><a target="_blank" href="http://trip.elong.com">艺龙旅游指南</a></li>
          <li> <a target="_blank" href="http://www.mipang.com/">米胖网</a></li>
          <li> <a target="_blank" href="http://www.cdyou.net">长岛旅游</a></li>
          <li> <a target="_blank" href="http://www.5fen.com/">五分旅游网</a></li>
          <li><a target="_blank" href="http://www.lvmama.com/">驴妈妈旅游网</a></li>
          <li><a target="_blank" href="http://www.tujia.com">途家网</a></li>
          <li><a target="_blank" href="http://www.ctcnn.com/">劲旅网</a></li>
          <li> <a target="_blank" href="http://www.tianqi.com">天气网</a></li>
          <li><a target="_blank" href="http://www.utourworld.com">众信旅游</a></li>
          <li><a target="_blank" href="http://www.zglxw.com">北京中国国旅</a></li>
          <li><a target="_blank" href="http://www.edushi.com">e都市</a></li>
          <li><a target="_blank" href="http://www.9tour.cn">九游网</a></li>
          <li><a target="_blank" href="http://www.goldenholiday.com">黄金假日旅游网</a></li>
          <li><a target="_blank" href="http://www.qianzhengdaiban.com">中国签证资讯网</a></li>
          <li> <a target="_blank" href="http://www.177dj.net">北京旅行社</a></li>
          <li><a target="_blank" href="http://www.yododo.com">游多多自助游</a></li>
          <li><a target="_blank" href="http://www.huoche.net">火车网</a></li>
          <li><a target="_blank" href="http://www.51you.com">新华旅行网</a></li>
          <li><a target="_blank" href="http://www.qyer.com/">穷游网</a></li>
          <li><a target="_blank" href="http://www.byecity.com">佰程旅行网</a></li>
          <li><a target="_blank" href="http://www.gwyou.com">昆明旅行社</a></li>
          <li><a target="_blank" href="http://www.ctcnn.com">旅游新媒体</a></li>
          <li><a target="_blank" title="中国经济网" href="http://travel.ce.cn">中国经济网</a></li>
          <li><a target="_blank" title="春秋航空" href="http://www.china-sss.com">春秋航空</a></li>
          <li><a target="_blank" href="http://www.19lou.com">19楼</a></li>
          <li><a target="_blank" href="http://www.becod.com">百酷特色住宿</a></li>
          <li> <a target="_blank" href="http://www.sipjinjilake.com">金鸡湖景区</a></li>
          <li><a target="_blank" href="http://www.zhuna.cn">酒店预订</a></li>
          <li><a target="_blank" href="http://www.youbian.com">邮编生活网</a></li>
          <li><a target="_blank" href="http://www.sunnychina.com">阳光旅行网</a></li>
          <li> <a target="_blank" href="http://jipiao.ly.com">同程机票查询</a></li>
          <li> <a target="_blank" href="http://www.keyunzhan.com">客运站</a></li>
          <li><a target="_blank" href="http://dujia.qunar.com">旅游度假</a></li>
          <li> <a target="_blank" href="http://www.city8.com">中国地图</a></li>
          <li> <a target="_blank" href="http://www.fotosay.com">图说天下</a></li>
          <li> <a target="_blank" href="http://www.uzai.com">悠哉旅游网</a></li>
          <li> <a target="_blank" href="http://www.mafengwo.cn">蚂蜂窝旅游攻略</a></li>
          <li> <a target="_blank" href="http://www.lvye.cn">绿野户外网</a></li>
          <li><a target="_blank" href="http://www.ethainan.com">三亚旅游</a></li>
          <li> <a target="_blank" href="http://www.kuxun.cn">酷讯旅游网</a></li>
          <li><a target="_blank" href="http://www.beibaotu.com">背包兔旅游行程</a></li>
          <li><a target="_blank" href="http://www.tuniu.com">途牛旅游网</a></li>
          <li><a target="_blank" href="http://www.springtour.com">春秋旅游</a></li>
          <li><a target="_blank" href="http://www.cngaosu.com/">中国高速网</a></li>
          <li> <a target="_blank" href="http://www.guolv.com/">北京神舟国旅</a></li>
          <li> <a target="_blank" href="http://www.xialv.com/">侠侣周边游</a></li>
          <li> <a target="_blank" href="http://you.ctrip.com/">携程旅游社区</a></li>
          <li> <a target="_blank" href="http://www.autonavi.com/">高德地图</a></li>
          <li> <a target="_blank" href="http://www.liebiao.com/">分类信息</a></li>
          <li><a target="_blank" href="http://www.ly.com/">打折机票</a></li>
        </ul>
      </div>
      <!-- 热门自由行div.hotziyou结束 -->
      
      <div class="hotziyou"> <span style="letter-spacing: 3.2px;">精选旅游：</span>
        <ul>
          <li><a href="http://www.iecity.com" target="_blank">生活网</a></li>
          <li><a href="http://www.niuwan.com" target="_blank">牛丸旅游网</a></li>
          <li><a href="http://www.zyoulun.com" target="_blank">最邮轮旅行网</a></li>
          <li><a href="http://t.cn/RPgfiZX" target="_blank">搜悦旅游圈</a></li>
          <li><a href="http://www.springtour.com" target="_blank">春秋旅游网</a></li>
          <li><a href="http://www.mdvoo.com" target="_blank">马尔代夫DIY旅游</a></li>
          <li><a href="http://www.wefax.cn" target="_blank">钱端</a></li>
          <li><a href="http://www.vipwifi.com" target="_blank">环球漫游 </a></li>
          <li><a href="http://travel.qunar.com/p-cs299979-chongqing" target="_blank">去哪儿重庆旅游攻略</a></li>
          <li><a href="http://www.hwtrip.com/" target="_blank">华为爱旅</a></li>
        </ul>
      </div>
      <div class="hotziyou"> <span style="letter-spacing:3.2px;">合作伙伴：</span>
        <ul>
          <div class="list"><img src="/tpg/Public/style/image/qiongyou.jpg">穷游网</div>
          <div class="list"><img src="/tpg/Public/style/image/qunaer.jpg">去哪儿</div>
          <div class="list"><img src="/tpg/Public/style/image/mafeng.jpg">蚂蜂窝</div>
          <div class="list"><img src="/tpg/Public/style/image/jingdong.jpg">京东</div>
          <div class="list"><img src="/tpg/Public/style/image/360.jpg">
            <p>360特价</p>
          </div>
          <div class="list"><img src="/tpg/Public/style/image/baidu.jpg">百度旅游</div>
          <div class="list"><img src="/tpg/Public/style/image/ali.jpg">阿里旅行</div>
          <div class="list"><img src="/tpg/Public/style/image/weipin.jpg">唯品会</div>
          <div class="list"><img src="/tpg/Public/style/image/dazong.jpg">大众点评网</div>
          <div class="list"><img src="/tpg/Public/style/image/zailushang.jpg">在路上</div>
          <div class="list"><img src="/tpg/Public/style/image/mianbao.jpg">面包旅行</div>
          <div class="list"><img src="/tpg/Public/style/image/shuning.jpg">苏宁旅游</div>
        </ul>
      </div>
      <div class="hotziyou"> <span style="letter-spacing:3.2px;">合作银行：</span>
        <ul>
          <div class="list"><img src="/tpg/Public/style/image/zhaoshang.jpg">招商银行</div>
          <div class="list"><img src="/tpg/Public/style/image/pingan.jpg">平安银行</div>
          <div class="list"><img src="/tpg/Public/style/image/zhongxin.jpg">中信银行</div>
          <div class="list"><img src="/tpg/Public/style/image/zhongguo.jpg">中国银行</div>
        </ul>
      </div>
    </div>

    <!-- div.footer-link结束 --> 
    <div class="Contact">
            <div><img src="/tpg/Public/style/image/logo_button.jpg" alt=""></div>
            <div>
            服务联系<br>
            企业电话: 0851-4567-18<br>
          1591631526<br>
            服务时间：9:00-23:30
            </div>
        </div><!--  div.Contact结束 -->
        <div class="About">
            <p>
            	<a href="us/us.html" target="_blank">关于我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            	<a href="us/lianxi.html" target="_blank">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            	<a href="us/zhifu.html" target="_blank">支付方式</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            	<a href="us/falv.html" target="_blank">法律声明</a></p>
            <div class="fl">
                <p>版权所有：Copyright © 影琪集团　　粤ICP备15019244号</p>
                <p>公司地址：中国贵州贵阳市福田区南园路70号</p>
            </div>
        </div> <!-- div..About结束 -->
  </div>
  <!--  div.content结束 --> 
</div>
<!-- div.footer结束 -->

</body>

</html>

<script src="/tpg/Public/style/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="/tpg/Public/style/js/foot.js"></script>



















  
</body>
    <script src="/tpg/Public/style/js/jquery-1.11.1.min.js"></script>
    <script src="/tpg/Public/style/js/bootstrap.min.js"></script>
    <script src="/tpg/Public/style/js/foot.js"></script>
    <script>
	 $(".search-menu").find("dl").find("dd").find("span").click(function(){
	 	 $(this).addClass("active");
	 	 $(this).siblings().removeClass("active");
	 })
</script>
    <script>
    new WOW().init();
    
    $(".navbar-nav").children("li").click(function(){
    	$(this).addClass("active1");
    	$(this).siblings().remove("active1");
    })
    
    $(".city").children("span").click(function(){
    	$(".city-m").text($(this).text());
    })
    
    $(".city-xuan").children("ul").find("li").click(function(){
    	$(this).addClass("active");
    	$(this).siblings().removeClass("active");
    })
    
    	$(".bao-xuan").children("li").click(function(){
    		$(this).addClass("active");
    		$(this).siblings().removeClass("active");
    	})
    	
    	
    </script>
</html>