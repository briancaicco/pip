<?php
/**
 * Template Name: Left and Right Sidebar Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package piproomz
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



	<div class="<?php echo esc_attr( $container ); ?>" id="content">


			<?php // get_sidebar( 'left' ); ?>

			<div class="content-area" id="primary">



					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>



			</div><!-- #primary -->

			<?php // get_sidebar( 'right' ); ?>
			

	</div><!-- Container end -->



<?php get_footer(); ?>
