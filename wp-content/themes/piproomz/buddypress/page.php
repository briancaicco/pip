<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package piproomz
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<section class="bg-grey-200">
	<div class="container content pt-5 ">

		<div class="row">

			<?php // Left Sidebar Check

			get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

		</div><!-- .row -->

		<?php // Right Sidebar Check

			if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>

	</div><!-- Container end -->
</section>

<?php get_footer(); ?>
