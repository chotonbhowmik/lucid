$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:false,
	    autoplay: true,
	    autoplayTimeout: 7000,
	    autoplayHoverPause: true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:2
	        }
	    }
	});

	$('.counter').counterUp({
	    delay: 10,
	    time: 1000
	});
});