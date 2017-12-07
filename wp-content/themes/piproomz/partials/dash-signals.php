<p class="h5 mb-3">Latest Signals</p>
<?php 

 if( current_user_can('pro_member') ){

	$query = new WP_Query( array( 'post_type' => 'signal', 'posts_per_page' => '5') );

} else{
	
	$query = new WP_Query( array( 'post_type' => 'signal', 'posts_per_page' => '3') );
	$i=0;
}


?>

<?php if ( $query->have_posts() ) : ?>

	<!-- the loop -->
	<?php while ( $query->have_posts() ) : $query->the_post();  $i++; ?>

		<div class="card mb-2 signal border-0 super-el">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<p class="currency-pair mr-auto"><?php the_title(); ?></p>
					<p class="action font-weight-bold <?php $action = get_field('action'); $action = strtolower($action); echo $action; ?>"><?php the_field('action'); ?></p>
				</div>
				<div class="d-flex justify-content-between">
					<div class="signal-meta"><b>SL:</b> <?php the_field('stop_loss'); ?> / <b>TP:</b> <?php the_field('take_profit'); ?> / <b>Hold:</b> <?php the_field('hold_length'); ?></div>
					<div class="signal-meta"><?php the_time( 'g:i a' ) ?></div>
				</div>
			</div>
		</div>
		<?php if ( $i = "3" ){ ?>
		<div class="card mb-2 signal border-0 super-el">
			<div class="card-body">
				<p class="lead">Get these signals via text message!</p>
				<a href="">Upgrade to a Pro Membership</a>
			</div>
		</div>

		<?php } ?>
	<?php endwhile; ?>
	<!-- end of the loop -->
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'No recent signals available.' ); ?></p>
<?php endif; ?>

