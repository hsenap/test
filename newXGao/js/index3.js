$(document).ready(function() { //打开网页自动加载
	$(window).resize(function() { //改变窗口或屏幕大小时调用function
		var header_top = $(window).width();
//		if(header_top < 460) { //顶部收藏本站等信息
//			$("#page-header-top").hide();
//
//		} else {
//			$("#page-header-top").show();
//
//		};
//		//alert($(window).width());
//		if(header_top < 615) { //首页等导航栏等信息
//
//			$(".page-header-page-header-fooder-ul-li").hide();
//			//$(".page-content-pp_ouhan-pp").animate({flex-wrap: wrap});
//		} else {
//
//			$(".page-header-page-header-fooder-ul-li").show();
//		};

	});
//	var wow = new WOW({    boxClass: 'page-content-ym-ymz',animateClass: 'animated',});
//	wow.init();
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
	new WOW().init();
};  

var wow = new WOW({   
	
   boxClass: 'wow',  
	
   animateClass: 'animated',  
   offset: 0,  
   mobile: true,   
 live: true });
//     春节特卖会轮播js
		var mySwiper = new Swiper('.swiper-container', {//class
			direction: 'horizontal',//滑动方向
			autoplay : 3000,//时间
			loop: true,//让Swiper看起来是循环的
			// 如果需要分页器
			pagination: '.swiper-pagination',
			// 如果需要前进后退按钮
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			// 如果需要滚动条
			scrollbar: '.swiper-scrollbar',
		});
});