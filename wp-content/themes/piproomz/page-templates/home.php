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

<div class="wrapper pt-0 pb-0" id="full-width-page-wrapper"> 

	<section id="hero" class="jumbotron" >
		
		<div class="<?php echo esc_attr( $container ); ?>" >

			<div class="row">
				<div class="gradient-bg"></div>
				<div class="col-12 col-md-7 py-3 py-md-5 mb-md-3">

					<h1 class="h2">The community where traders learn from other traders.</h1>
					<p>Piproomz helps traders of any experience level connect with other traders, resources, and tools so they can dominate the markets.</p>
					<a href="#pt-login" class="btn btn-lg btn-success">Join For Free</a>

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

			<div class="row">

				<div class="col-md-12 content-area" id="primary">

					<main class="site-main" id="main" role="main">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'loop-templates/content', 'page' ); ?>

							<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :

								comments_template();

							endif;
							?>

						<?php endwhile; // end of the loop. ?>

					</main><!-- #main -->

				</div><!-- #primary -->

			</div><!-- .row end -->

		</div><!-- Container end -->

	</section><!-- Section end -->

</div><!-- Wrapper end -->

<?php 

//} else {
	//echo "<script>window.location.href = '" . home_url() . "/activity';</script>";
	//exit();
//}

get_footer(); ?>