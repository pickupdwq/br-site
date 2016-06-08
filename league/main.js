$(function(){
	$(".item").each(function() {
		$(this).hover(function() {
			$(this).find(".position-fontscale").css({"opacity":"0","transform":"translate(-50%,-50%) scale(1.55) rotate3d(1, -10, 1,-90deg)"});
			$(this).find("img").css({"transform":"scale(1.1)"});
			$(this).find(".position-fontup").css({"transform":"translate(-50%,-50%)","opacity":"1"});
			$(this).find(".position-fontdown").css({"transform":"translate(-50%,50%)","opacity":"1"});
		}, function() {
			$(this).find(".position-fontscale").css({"opacity":"1","transform":"translate(-50%,-50%)"});
			$(this).find("img").css({"transform":"scale(1)"});
			$(this).find(".position-fontup").css({"transform":"translate(-50%,0%)","opacity":"0"});
			$(this).find(".position-fontdown").css({"transform":"translate(-50%,0%)","opacity":"0"});
		});
	});
})