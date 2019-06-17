$(document).ready(function(){
	// scroll nav 
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 200) {
			$('nav').addClass('fixed-header');
		}
		else {
			$('nav').removeClass('fixed-header');
		}
	});	

	// start carousel section shop
	
	//  back-to-top start
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
	// mobile first
	$(".service-left ").hide();
	$("svg.svg-inline--fa.fa-align-right.fa-w-14").click(function(){
		$(".service-left ").toggle();
	});

	// *********************************************************************************************
//  SHARE

var share = document.querySelector('.share'),
clickShowShare = document.getElementById('click-show-share');	
clickShowShare.addEventListener('click', function(){
	share.classList.toggle('show-share-in');
})

// *********************************************************************************
});

$(function(){  // $(document).ready shorthand
	$('.product-show').fadeIn('slow');
});

$(document).ready(function() {

	/* Every time the window is scrolled ... */
	$(window).scroll( function(){

		/* Check the location of each desired element */
		$('.product-hide').each( function(i){

			var bottom_of_object = $(this).position().top + $(this).outerHeight();
			var bottom_of_window = $(window).scrollTop() + $(window).height();

			/* If the object is completely visible in the window, fade it it */
			if( bottom_of_window > bottom_of_object ){

				$(this).animate({'opacity':'1'},700);

			}
		}); 
	});
});
