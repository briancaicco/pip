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

 					<?php endwhile; // end of the loop. ?>

 			</div>

 		</div>
 		<div class="row justify-content-center">
 			<div class="col-12 text-center mt-3">
 				<div class="addthis_inline_share_toolbox"></div>
 			</div>
 		</div>
 		<div class="row justify-content-center">
 			<div class="col-5 text-center mt-3">
 				<input class="form-control form-control-lg" type="text" value="<?php the_permalink(); ?>" />
 			</div>
 		</div> 			
 	</div><!-- Container end -->

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a1d8fa815ad4299"></script>

 <?php get_footer(); ?>