$(function() {
	if($('.cooperation-slider').length>0){

		$('.cooperation-slider').owlCarousel({
	        loop: true,
	        margin: 30,
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

	if($("[data-fancybox]").length>0){

		$("[data-fancybox]").fancybox();

	}

});
