<p class="h5 mb-3">Latest Signals</p>
<?php 

 if(current_user_can('pro_member')) {

	$query = new WP_Query( array( 'post_type' => 'signal', 'posts_per_page' => '4') );
	$restrict = false;

} else{
	
	$query = new WP_Query( array( 'post_type' => 'signal', 'posts_per_page' => '3') );
	$restrict = true;
}
$i=0;
?>
<?php if ( $query->have_posts() ) : ?>

	<!-- the loop -->
	<?php while ( $query->have_posts() ) : $query->the_post(); $i++;?>

		<div class="card mb-2 signal border-0 super-el">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<p class="currency-pair mr-auto"><?php the_title(); ?> - <?php the_field('entry_price'); ?></p>
					<p class="action font-weight-bold <?php $action = get_field('action'); echo $action['value']; ?>"><?php echo $action['label']; ?></p>
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
		<?php if ( $restrict == true and $i == 3 ){ ?>
		<div class="card mb-2 signal border-0 super-el buy-gradient dash-pro-signals">
			<div class="card-body pb-0">
				<p class="lead text-white font-weight-bold">Trade signals via SMS!</p>
				<p>Maximize your trades! Get the latest signals to your phone.</p>
			</div>
			<div class="card-footer text-center">
				<a href="<?php bloginfo( 'url' ) ?>/subscribe/pro/" class="btn btn-secondary" >Upgrade to Pro</a>
			</div>
		</div>

	<?php } endwhile; ?>
	<!-- end of the loop -->
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'No recent signals available.' ); ?></p>
<?php endif; ?>

