jQuery(document).ready(function($) {
  $('.glossary-index li a#glossary-menu').on('click', function(event) {
    var item = $(this).data('name');
    if ( item == 'all' ) {
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
      $('.glossary-list').find('div.glossary-item .term').each(function(index, el) {
        if( $(this).text().toLowerCase().indexOf( filter ) != -1 ){
          flag = true;
          $(this).parent('.glossary-item').show();
          $(this).parents('.glossary-items').show();
      }
        
      });

      if ( flag == false ) {
        $('.glossary-alert').show();
      } else {
        $('.glossary-alert').hide();
      }
      
  });
});
