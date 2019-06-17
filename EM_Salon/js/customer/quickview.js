$(document).ready(function(){
		
			$(window).scroll(function(){
			    if ($(window).scrollTop() >= 500) {
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
			    smartSpeed: 1000,
			    autoplayHoverPause: true,
			    responsive: {
			        0: {
			            items: 3
			        },
			        600: {
			           items: 3
			        },
			        768: {
			           items: 4
			        }
			    }
			}) // end owl-carousel section shop
			
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
			
		});
    	$(".xzoom, .xzoom-gallery").xzoom({tint: '#333', Xoffset: 15});