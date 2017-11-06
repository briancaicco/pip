<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying the full-width home page.
 *
 * @package piproomz
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );

//if( ! is_user_logged_in() ){
?>


	<section id="hero" class="jumbotron" >
		
		<div class="<?php echo esc_attr( $container ); ?>" >

			<div class="row">
				<div class="gradient-bg"></div>
				<div class="col-12 col-md-7 py-3 py-md-5 mb-md-3">

					<h1 class="h1 mb-3">Learn to be an expert trader.</h1>
					<p>Piproomz is helping traders of any experience level connect with other traders, resources, and tools so they can dominate the markets.</p>
					<a href="<?php echo home_url (); ?>/register" class="btn btn-lg btn-success mt-3">Join for Free</a>

				</div>
				<div class="col-12 col-md-5 card-wrap">
					<div class="card w-100">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/app-mockup.png" class=" mx-auto" />
					</div>
				</div>

			</div><!-- .row end -->

		</div><!-- Container end -->

	</section><!-- Section end -->

	<section id="content">

		<div class="<?php echo esc_attr( $container ); ?>" >


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

	</section><!-- Section end -->


<?php 

//} else {
	//echo "<script>window.location.href = '" . home_url() . "/activity';</script>";
	//exit();
//}

get_footer(); ?>