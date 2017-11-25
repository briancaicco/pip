<div class="row">
	<div class="col-4">
		<p class="h4">Latest Signals</p>
		<?php 
		$container = get_theme_mod( 'understrap_container_type' );
		$args = array(
			'post_type'			=> 'signals',
			'orderby'			=> 'date', 
			'order'				=> 'DSC',
			);
		$signals = new WP_query( $args );
		?>
		<div class="card">
			<div class="card-body">
				<?php if ( $signals->have_posts() ) { ?>
					<?php while( $signals->have_posts() ) { ?>
						<?php $signals->the_post(); ?>
							<?php the_title(); ?>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
