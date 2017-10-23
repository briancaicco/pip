<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package piproomz
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



	<div class="<?php echo esc_attr( $container ); ?>" id="content">


					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>



	</div><!-- Container end -->


<?php get_footer(); ?>
