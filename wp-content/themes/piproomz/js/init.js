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


// Dashboard Nav 
$("#menu-toggle").click(function() {
	$("#wrapper").toggleClass("toggled");
});



  //$('[data-toggle="tooltip"]').tooltip();

  // Menu Toggle
  	  function toggleClassMenu() {
  	myMenu.classList.add("menu--animatable"); 
  	if(!myMenu.classList.contains("menu--visible")) {   
  		myMenu.classList.add("menu--visible");
  	} else {
  		myMenu.classList.remove('menu--visible');   
  	} 
  }

  var myMenu = document.querySelector(".menu");
  var oppMenu = document.querySelector(".menu-icon");
  oppMenu.addEventListener("click", toggleClassMenu, false);
  myMenu.addEventListener("click", toggleClassMenu, false);


});


window.onload = function(){ 



};