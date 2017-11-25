
<div class="row">
	<div class="col-4">
		<p class="h4">Latest Signals</p>
		<?php 
		$container = get_theme_mod( 'understrap_container_type' );
		$args = array(
			'post_type'			=> 'signals',
			'orderby'			=> 'date'
			);
		$signals = new WP_query( $args );
		?>
		<div class="card">
			<div class="card-body">
				<?php if ( $signals->have_posts() ) : ?>
					<?php while( $signals->have_posts() ) : $signals->the_post(); ?>

							<?php echo the_field('field_5a0d8a5f5525e'); ?>

					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query();	?>
			</div>
		</div>
	</div>
</div>
