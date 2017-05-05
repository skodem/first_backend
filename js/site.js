$(document).ready(function() {
	$('.header-menu-mob .btn').click(function(){
		if($(this).hasClass("openmenu")) {
			$(this).stop().removeClass('openmenu').addClass('closemenu');
			$(".header-menu").stop().slideDown();
		}
		else {
			$(this).stop().removeClass('closemenu').addClass('openmenu');
			$(".header-menu").stop().slideUp();
		}
		return false;
	});
	
	$('.flexslider').flexslider({
		animation: "fade",
		animationLoop: true,
		startAt: 0,
		pauseOnAction: false,
		controlNav: true,
		directionNav: true,
		keyboard: false,
	});
});