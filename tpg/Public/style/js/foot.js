

if($(window).width()>=1200){
		$(".container").css("width","1170px")
	}else{
		$(".container").css("width", document.body.offsetWidth);
}




	var twoHeight=$(".two").height();
	window.onload=function(){
		if(parseInt(twoHeight)>118){
			$(".two").css({"height":"118px","overflow":"hidden"});
			$(".open").css("display","block");
		}else if(parseInt(twoHeight)<118){
			$(".two").css("height","auto");
			$(".open").css("display","none");
		}
	}
	$(".open").click(function(){
		open(this)
	})
	function open(e){
		if($(e).text().charAt(0)=="展"){
				$(".two").css({"overflow":"initial","height":"auto"});
				$(e).text("收取岛屿");
		}else if($(e).text().charAt(0)=="收"){
				$(".two").css({"overflow":"hidden","height":"118px"});
				$(e).text("展开岛屿");
		}
	}









