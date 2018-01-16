jQuery(document).ready(function($) {


	 /************Mobile Menu************/

	 	var menuButton = $('.closeBtn');
	 	var globalNav = $('.global-nav');

	 	function mobileMenuLaunch() {
	 		menuButton.click( function(e) {
	 			e.preventDefault();
	 			e.stopPropagation();
	 			e.stopImmediatePropagation();
	 	        var status = globalNav.hasClass('menu-active');
	 	      if(status){
	 	        globalNav.removeClass('menu-active');
	 	        menuButton.removeClass('button-active');
	 	      }else{
	 	        globalNav.addClass('menu-active');
	 	        menuButton.addClass('button-active');
	 	      }
	 	  });
	 	}

	mobileMenuLaunch();



});
