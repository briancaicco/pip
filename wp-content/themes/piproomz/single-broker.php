<?php

/**
 * Template Name: Single Broker
 * @package piproomz
 */

 get_header();
 $container = get_theme_mod( 'understrap_container_type' );
 ?>



 	<div class="<?php echo esc_attr( $container ); ?>" id="content">

 		<div class="row">

 			<div class="col">

 				<div class="card my-3 my-sm-5 p-3 p-md-4 p-lg-5">

 					<div class="card-body">

 					<?php while ( have_posts() ) : the_post(); ?>

 						<h1 class="mb-4"><?php the_title(); ?></h1>

 						<?php the_field('broker_editors_review'); ?>

 						<?php
 						// If comments are open or we have at least one comment, load up the comment template.
 						if ( comments_open() || get_comments_number() ) :

 							comments_template();

 						endif;
 						?>

 					<?php endwhile; // end of the loop. ?>

 					</div>

 				</div>

 			</div>

 		</div>

 	</div><!-- Container end -->


 <?php get_footer(); ?>