<?php
/**
 * Template Name: Home Page Depracated
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
		<div class="gradient-bg"></div>

		<div class="<?php echo esc_attr( $container ); ?>" >
			<div class="row">
				<div class="col-12 col-md-10 py-3 py-md-5 mb-md-3">
					<h1 class="display-4 mb-3 font-weight-bold ">Learn to be an expert trader.</h1>
					<p class="w-50">Piproomz is helping traders of any experience level connect with other traders, resources, and tools so they can dominate the markets.</p>
					<a href="<?php bloginfo( 'url' ); ?>/register" class="btn btn-el btn-lg btn-success mt-3">Join now</a>

				</div>
				<div class="col-12 col-md-5">
<!-- 					<div class="card w-100">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/app-mockup.png" class=" mx-auto" />
					</div> -->
				</div>

			</div><!-- .row end -->

		</div><!-- Container end -->

	</section><!-- Section end -->



<!-- Chat Rooms -->
	<section id="chat-rooms" class="feature py-5" >
		
		<div class="<?php echo esc_attr( $container ); ?>" >
			<div class="gradient-bg"></div>
			<div class="row justify-content-end">
				<div class="col-12 col-md-6 py-3 py-md-5 mb-md-3">
					<p class="lead">Private Trade Rooms</p>
					<h2 class="font-weight-bold">Discuss market trends as they're happening.</h2>
				</div>
				<div class="col-12 col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/trading-rooms.svg" class=" mx-auto" />
				</div>
			</div><!-- .row end -->

		</div><!-- Container end -->

	</section><!-- Section end -->


<!-- Broker Database -->
	<section id="find-broker" class="feature py-5" >
		
		<div class="<?php echo esc_attr( $container ); ?>" >
			<div class="gradient-bg"></div>
			<div class="row justify-content-start">

				<div class="col-12 col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/database.svg" class=" mx-auto" />
				</div>
				<div class="col-12 col-md-6 py-3 py-md-5 mb-md-3">
					<p class="lead">Database of 400+ Brokers</p>
					<h2 class="font-weight-bold">Keep your funds safe. Choose a recommend broker.</h2>
				</div>

			</div><!-- .row end -->

		</div><!-- Container end -->

	</section><!-- Section end -->


<!-- Signals -->
	<section id="trade-signals" class="feature py-5" >
		
		<div class="<?php echo esc_attr( $container ); ?>" >
			<div class="gradient-bg"></div>
			<div class="row justify-content-end">


				<div class="col-12 col-md-6 py-3 py-md-5 mb-md-3">
					<p class="lead">Signals</p>
					<h2 class="font-weight-bold">Buy and sell when the professionals do.</h2>
				</div>
				<div class="col-12 col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/signals.svg" class=" mx-auto" />
				</div>

			</div><!-- .row end -->

		</div><!-- Container end -->

	</section><!-- Section end -->


<!-- Trader Dashboard -->
	<section id="trade-signals" class="feature py-5" >
		
		<div class="<?php echo esc_attr( $container ); ?>" >
			<div class="gradient-bg"></div>
			<div class="row justify-content-start">

				<div class="col-12 col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/dashboard.svg" class=" mx-auto" />
				</div>
				<div class="col-12 col-md-6 py-3 py-md-5 mb-md-3">
					<p class="lead">Trading Dashboard</p>
					<h2 class="font-weight-bold">View tickers, feeds, stats and community activity from one screen.</h2>
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