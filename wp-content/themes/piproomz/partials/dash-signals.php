
<?php 

 if(current_user_can('pro_member')) {

	$query = new WP_Query( array( 'post_type' => 'signal', 'posts_per_page' => '6') );
	$restrict = false;

?>

<?php $i=0; if ( $query->have_posts() ) : ?>

	<!-- the loop -->
	<?php while ( $query->have_posts() ) : $query->the_post(); $i++;?>
	<div class="col-12 col-md-4">
		<div class="card mb-3 signal border-0 super-el">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<p class="currency-pair mr-auto"><?php the_title(); ?> - <?php the_field('entry_price'); ?></p>
					<p class="action font-weight-bold <?php // $action = get_field('action'); echo $action['value']; ?>"><?php // echo $action['label']; ?></p>
				</div>
				<div class="">
					<div class="signal-meta"><b>Entry Time:</b> <?php the_field('entry_time'); ?></div> 
					<div class="signal-meta"><b>Entry Price:</b> <?php the_field('entry_price'); ?></div> 

				</div>
				<div class="d-flex justify-content-between">
					<div class="signal-meta"><b>SL:</b> <?php the_field('stop_loss'); ?> / <b>TP:</b> <?php the_field('take_profit'); ?> / <b>Hold:</b> <?php the_field('hold_length'); ?></div>
					<!-- <div class="signal-meta"><b>Posted:</b> <?php the_time( 'g:i a' ) ?></div> -->
				</div>
			</div>
		</div>
	</div>
		<?php  // if ( $restrict == true and $i == 2 ){ ?>

<!-- 	<div class="col-12 col-md-4">
		<div class="card mb-3 signal border-0 super-el buy-gradient dash-pro-signals">
			<div class="card-body pb-0">
				<p class="text-white"> <span class="font-weight-bold h5">Maximize your trades!</span> <br/>Get the latest signals to your phone.</p>
			</div>
			<div class="card-footer text-center">
				<a href="<?php bloginfo( 'url' ) ?>/subscribe/pro/" class="text-white" >Upgrade to Pro</a>
			</div>
		</div>
	</div> -->

	<?php // } ?> 
<?php endwhile; ?>
	<!-- end of the loop -->
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'No recent signals available.' ); ?></p>

<?php endif; ?>


<?php } else{ ?>
	
	<div class="col-12 col-md-4">
		<div class="card mb-3 signal border-0 super-el buy-gradient dash-pro-signals">
			<div class="card-body pb-0">
				<!-- <p class="lead ">Trade signals via SMS!</p> -->
				<p class="text-white"> <span class="font-weight-bold h5">Maximize your profits!</span> <br/>Get the latest signals via SMS.</p>
			</div>
			<div class="card-footer text-center">
				<a href="<?php bloginfo( 'url' ) ?>/subscribe/pro/" class="text-white" >Upgrade to Pro</a>
			</div>
		</div>
	</div>

<?php } $i=0;?>


