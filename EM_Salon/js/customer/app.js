
$(document).ready(function(){
	// scroll nav 
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 300) {
			$('nav').addClass('fixed-header');
		}
		else {
			$('nav').removeClass('fixed-header');
		}
	});	
	
	// start carousel section shop
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		navText: [
		"<i class='fas fa-caret-left'></i>",
		"<i class='fas fa-caret-right'></i>"
		],
		autoplay: true,
    	autoplayTimeout:2000,
		smartSpeed: 1000,
		autoplayHoverPause: false,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 2
			},
			992: {
				items: 4
			}
		}
	}) // end owl-carousel section shop
	
	$(window).scroll(function(){
		if($(this).scrollTop()>100){
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
	//  SHARE
	var share = document.querySelector('.share'),
	clickShowShare = document.getElementById('click-show-share');	
	clickShowShare.addEventListener('click', function(){
		share.classList.toggle('show-share-in');
		
	});
// *******************************************************************

});

