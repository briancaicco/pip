<?php
/**
 * The template for displaying all single posts.
 *
 * @package piproomz
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>



	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">



				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>


	</div><!-- Container end -->



<?php get_footer(); ?>
