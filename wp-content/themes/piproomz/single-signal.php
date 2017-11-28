<?php

/**
 * Template Name: Single Signal
 * @package piproomz
 */

 get_header();
 $container = get_theme_mod( 'understrap_container_type' );
 ?>



 	<div class="<?php echo esc_attr( $container ); ?>" id="content">

 		<div class="row justify-content-center">

 			<div class="col-7">

 					<?php while ( have_posts() ) : the_post(); ?>
 						<div class="navbar-brand text-center my-5" style="display: inherit;" rel="home" href="" title="Piproomz">Piproomz<small style="vertical-align: super; font-size: 9px;"> beta</small></div>
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

 					<?php endwhile; // end of the loop. ?>

 			</div>

 		</div>

 	</div><!-- Container end -->


 <?php get_footer(); ?>