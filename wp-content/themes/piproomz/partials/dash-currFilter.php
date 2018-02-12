<div class="row">
	<div class="col-12">
		<p class="h5 mb-3">Latest Signals</p>
	</div>
</div>
<div class="row mb-4">
	<?php get_template_part( 'partials/dash', 'signals' ); ?>
</div>

<div class="row">
	<div class="col-12">
		<p class="h5 mb-3">Trade Rooms</p>
	</div>
</div>
<div class="row"> 
<?php 

$rooms = array("EURUSD","USDJPY","GBPUSD","AUDUSD");
$arrlength=count($rooms);

for ($x=0;$x<$arrlength;$x++) { ?>
		<?php //echo $rooms[$x]; ?>
		<div class="col-12 col-md-6">
			<div class="card p-4 mb-4">
				<iframe src="https://www.tradingview.com/widgetembed/?symbol=<?php echo $rooms[$x]; ?>&interval=D&hidetoptoolbar=1&hidesidetoolbar=1&symboledit=0&saveimage=1&toolbarbg=f1f3f6&studies=%5B%5D&hideideas=1&theme=Light&style=1&timezone=Etc%2FUTC&studies_overrides=%7B%7D&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en
" height="210px" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
				<!-- <iframe src="https://www.tradingview.com/mediumwidgetembed/?symbols=<?php echo $rooms[$x]; ?>|1d&timezone=Etc/UTC&locale=en" height="210px" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe> -->


	  			<button class="btn btn-success my-3" type="button" data-toggle="collapse" data-target="#collapse<?php echo $x; ?>" aria-expanded="false" aria-controls="collapse<?php echo $x; ?>">
	  				Chat 
	  			</button>
				
				<div class="collapse" id="collapse<?php echo $x; ?>">
					<?php pip_get_ifly_chat_rooms( $rooms[$x]); ?>
				</div>
				
			</div>
		</div>

<?php } ?>
</div>


<!-- Fiilter Rooms -->

<h2 class="mt-4">Members Only Trade Rooms</h2>
<div class="col-12  text-center">
	<?php if(current_user_can('mepr-active','memberships:4007,4124,200,204')){ ?>
		<button class="btn my-4" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Select Rooms To Display
		</button>
	<?php }else { ?>
		<div class="row">
			<div class="col-12 text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/upgrade-membership.jpg" class="img-fluid">
			</div>
		</div>
	<?php } ?>
</div>
<div class="col-12">
	<div class="collapse" id="collapseExample">
		<form action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" id="filter">
			<?php


			$container = get_theme_mod( 'understrap_container_type' );


				// Check for query transient in database
			if ( false === ( $currencies = get_transient( 'currencies' ) ) ) {
				$args = array(
					'posts_per_page'		=> -1,
					'post_type'			=> 'currency',
					'orderby'			=> 'date', 
					'order'				=> 'DSC',
				);

				$currencies = new WP_query( $args );

				// Save query results to database as transient
				set_transient( 'currencies', $currencies, 7 * DAY_IN_SECONDS );
			}
			?>

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
-->
<div id="response" class="mt-4"></div>


<script type="text/javascript">
	jQuery(function($){

		$('#filter').submit(function(){
			
			var post_filter = $('#filter');
			
			$.ajax({
				type: post_filter.attr('method'),
				url: post_filter.attr('action'),
				data: post_filter.serialize(),
				beforeSend: function(xhr){
					post_filter.find('#applyFilter').text('Processing...'); // changing the button label
				},
				success: function(data){
					post_filter.find('#applyFilter').text('Apply filter'); // changing the button label back
					$('#response').html(data); // insert data
				}

			});
			return false;
		});
	})
</script>

