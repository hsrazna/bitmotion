$(function() {

	if($('.slider-box').length>0){

		$('.slider-box').owlCarousel({
	        loop: true,
	        margin:0,
	        nav: true,
	        dots: true,
	        navText:['<span class="arrleft"></span>','<span class="arright"></span>'],
	        responsive:{
	            0:{
	                items:1
	            },
	            600:{
	                items:1
	            },
	            1000:{
	                items:1
	            }
	        }
	        
	    });

	}

	if($(".popup-with-move-anim").length>0){

		$('.popup-with-move-anim').magnificPopup({
	        type: 'inline',
	        autoFocusLast: false,
	        fixedContentPos: true,
	        fixedBgPos: true,

	        overflowY: 'auto',

	        closeBtnInside: true,
	        preloader: false,
	        
	        midClick: true,
	        removalDelay: 300,
	        mainClass: 'my-mfp-slide-bottom'
	    });

	}
	


});
