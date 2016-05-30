$(function(){
	var winH=$(window).height(),
		winW=$(window).width(),
		spnavHeight=$(".sp-nav").outerHeight(),
	 	$navHeight=$(".sp-nav").height(),
	 	pcnavHeight=$("#nav").outerHeight(),
	 	footerHeight=$("#footer").height(),
		$spnavFooterHeight=$("#spnavFooterHeight").height(),
		heightPath=winH-$navHeight-$spnavFooterHeight;

	/*pc content*/
	if(winW>768){
		$(".cooperate-wrap").css({"min-height":winH-pcnavHeight-footerHeight+'px'})
	}

	var sp767={
		_slider_nav_height:function(){
		// $("#nav").height($navHeight);//导航条高度
		},
		_slider_nav_animation:function(){
			$(".hanBer").click(function(){
				$(this).find('p').each(function(){
					$(this).toggleClass("p-nth-child"+$(this).index()+"");
				});
				$(".sp-logo").fadeToggle();			
				$(".sp-slider-nav").fadeIn();
				$(".sp-slider-nav").toggleClass('sp-slider-nav-active');
			});
		}
	}
		sp767._slider_nav_height();
		sp767._slider_nav_animation();
	//屏幕宽度小于768执行
	if(winW<768){												
	/*三角形返回顶部*/
	$(window).scroll(function(){
		var $winScroll=$(window).scrollTop();
		
		if($winScroll>winH){
			$(".triangle").fadeIn();
			$(".sp-logo").fadeOut();
			$(".blog-wrap").addClass('blog-wrap-w100p')
		}
		else{
			$(".triangle").fadeOut();
			$(".sp-logo").fadeIn();
			$(".blog-wrap").removeClass('blog-wrap-w100p');
		}
		})
	$(".triangle").click(function(){
		$('html,body').animate({
			scrollTop:"0px"
		},200)
	})
	}
	

	
});
