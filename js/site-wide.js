jQuery(document).ready(function($) {
	
	
	 /************Mobile Menu************/
	 				
	 	var menuButton = $('.mobile-menu-button');
	 	var header = $('.site-header');
	 		
	 	function mobileMenuLaunch() {
	 		menuButton.click( function(e) {
	 			e.preventDefault();
	 			e.stopPropagation();
	 			e.stopImmediatePropagation();
	 	        var status = header.hasClass('menu-active');
	 	      if(status){
	 	        header.removeClass('menu-active');
	 	        menuButton.removeClass('button-active');
	 	      }else{
	 	        header.addClass('menu-active');
	 	        menuButton.addClass('button-active');
	 	      }
	 	  });
	 	}
	 	
	 	if ($(window).width() < 740) {
	 	    mobileMenuLaunch();
	 	} else {
	 		menuButton.unbind();
	 		header.removeClass('menu-active');
	 		menuButton.removeClass('button-active');
	 	}
	 	
	 	$( window ).resize(function() {
	 	    if($(window).width() < 740 ) {
	 	        mobileMenuLaunch();
	 	    } else {
	 		    menuButton.unbind();
	 		    header.removeClass('menu-active');
	 	    	menuButton.removeClass('button-active');
	 	    }
	 	});
	 	
	 	
	 	
	 
	/************Hero Slider************/
	
	$('.hero-slider').slick({
	  dots: true,
	  arrows: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: false,
	  autoplaySpeed: 5000
	});	
	
	
});


