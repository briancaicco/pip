jQuery(document).ready(function($) {

	$('.glossary-index li a.glossary-menu').on('click', function() {
		var item = $(this).data('name');
		if ( item === 'all' ) {
			$('.glossary-items').show();
		} else {
			$('.glossary-items').hide();
			$('#glossary-'+item ).show();
		}

	});

	$( "#glossary-search" ).keyup(function() {
		var filter = $(this).val().toLowerCase();
		$('.glossary-list .glossary-items').hide();
		$('.glossary-list .glossary-item').hide();
		var flag = false;
		$('.glossary-list').find('div.glossary-item .term').each(function() {
			if( $(this).text().toLowerCase().indexOf( filter ) !== -1 ){
				flag = true;
				$(this).parent('.glossary-item').show();
				$(this).parents('.glossary-items').show();
			}

		});

		if ( flag === false ) {
			$('.glossary-alert').show();
		} else {
			$('.glossary-alert').hide();
		}

	});


	// Don't Autoplay carousel
	//$('.carousel').carousel('pause');


	$welcomeCookie = Cookies.get('hide_welcome');

	if ( $welcomeCookie !== 'yes'){
	    // Show welcome modal
		$('#welcomemodal').modal('show');
	}

	// If user closed welcome modal set cookie and don't sow it again.
	$('#welcomemodal .close span').on('click', function () {
		Cookies.set('hide_welcome', 'yes', { expires: 2800 });
	});

	// Main navigation display functions

	// Enable Menu slide animation
	$('.menu').addClass('menu--animatable');

	// Activate on icon click
	$('.menu-icon').on('click', function(){
		$('.menu').toggleClass('menu--visible');

	});

	// hide menu if visible and click 
	$('.menu--animatable').on('click', function(){
		$('.menu').removeClass('menu--visible');

	});

	// fade out the content on link click
	$('.menu--animatable .nav-link').on('click', function(){
		$('body').fadeOut();
	});


});