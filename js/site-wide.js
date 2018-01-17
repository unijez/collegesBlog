jQuery(document).ready(function($) {


	 /************Mobile Menu************/

	 	var menuButton = $('.nav-button');
	 	var globalNav = $('.global-nav');
		var body = $('body');

	 	function mobileMenuLaunch() {
	 		menuButton.click( function(e) {
	 			e.preventDefault();
	 			e.stopPropagation();
	 			e.stopImmediatePropagation();
	 	        var status = globalNav.hasClass('menu-active');
	 	      if(status){
	 	        globalNav.removeClass('menu-active');
	 	        menuButton.removeClass('button-active');
						body.removeClass('menueOpen');
	 	      }else{
	 	        globalNav.addClass('menu-active');
	 	        menuButton.addClass('button-active');
						body.addClass('menueOpen');
	 	      }
	 	  });
	 	}

	mobileMenuLaunch();



});
