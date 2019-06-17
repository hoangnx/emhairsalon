$(document).ready(function(){
	// scroll nav 
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 100) {
			$('nav').addClass('fixed-header');
		}
		else {
			$('nav').removeClass('fixed-header');
		}
	});	
	// tab content
	$(".tab-content").hide();
	$(".tab-content:first").show();
	$("ul li:first").addClass("current");
	$("ul li").click(function(){
		$("ul li").removeClass("current");
		$(this).addClass("current");
		$(".tab-content").hide();
		var tab_id = $(this).find("a").attr("href");
		// console.log("banda an");
	$(tab_id ).fadeIn();
	// back go to start
	$(window).scroll(function(){
		if($(this).scrollTop()>200){
			$(".go-up").fadeIn();
		}
		else{
			$(".go-up").fadeOut();
		}
	});
	$(".go-up").click(function(){
		$("body, html").animate({scrollTop:0}, 1000);
	});
	//  back-to-top end
	// ***************************************************************
//  SHARE
	//lấy giá trị
	var share = document.querySelector('.share'),
	clickShowShare = document.getElementById('click-show-share');	
	clickShowShare.addEventListener('click', function(){
		share.classList.toggle('show-share-in');
	})

// *******************************************************************

});
});
