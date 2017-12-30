

<div class="col-12">
	<button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		<span class="dashicons dashicons-filter"></span>
	</button>
</div>
<div class="col-12">
	<div class="collapse" id="collapseExample">
		<form action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" id="filter">
			<?php
			$container = get_theme_mod( 'understrap_container_type' );
			$args = array(
				'posts_per_page'		=> -1,
				'post_type'			=> 'currency',
				'orderby'			=> 'date', 
				'order'				=> 'DSC',
			);
			$currencies = new WP_query( $args ); ?>

				<div class="row flex-wrap" id="checkbox-container">
					<?php if ( $currencies->have_posts() ) {  while( $currencies->have_posts() ) { $currencies->the_post(); ?>

					<div class="col-3 col-sm-2">
						<div class="form-check border-0 mt-2 text-md-left">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input mb-2 float-md-left" name="currency[]" post_id="<?php the_ID(); ?>" value="<?php the_ID(); ?>" autocomplete="off"/>
								<p><?php the_title(); ?></p>
							</label>

						</div>
					</div>

						<?php } ?>
					<?php } ?>
				</div>
			<input type="hidden" name="action" value="roomz_filter">
			<button class="btn" id="applyFilter">Apply</button>
		</form>
	</div>
</div>
<!-- 	<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
				<div class="col-12">
				<h3><?php echo $room->post_title; ?></h3>

				<script type="text/javascript">
					// new TradingView.widget({
					// 	"autosize": true,
					// 	"symbol": "<?php echo $room->post_title; ?>",
					// 	"interval": "1",
					// 	"timezone": "Etc/UTC",
					// 	"theme": "light",
					// 	"style": "1",
					// 	"locale": "en",
					// 	"toolbar_bg": "#f1f3f6",
					// 	"enable_publishing": false,
					// 	"hide_side_toolbar": false,
					// 	"calendar": true,
					// // "news": [
					// // "headlines"
					// // ],
					// "hideideas": true
					// });
				</script>
			</div> -->

	<!-- <div id="response"></div> -->

<script type="text/javascript">
	jQuery(function($){

		$('#filter').submit(function(){
			
			var post_filter = $('#filter');
			
			$.ajax({
				type: post_filter.attr('method'),
				url: post_filter.attr('action'),
				data: post_filter.serialize(),
				
				function(response) {
        			console.log( response );
    			}
    		});
		});
	});



	// jQuery(function($){
	// 	$('#filter').submit(function(){
			
	// 		var post_filter = $('#filter');
			
	// 		$.ajax({
	// 			type: post_filter.attr('method'),
	// 			url: post_filter.attr('action'),
	// 			data: post_filter.serialize(),
	// 			beforeSend: function(xhr){
	// 				post_filter.find('#applyFilter').text('Processing...'); // changing the button label
	// 			},
	// 			success: function(data){
	// 				post_filter.find('#applyFilter').text('Apply filter'); // changing the button label back
	// 				$('#response').html(data); // insert data
	// 			}

	// 		});
	// 		return false;
	// 	});
	// })
</script>
