<?php 
/**
 * Template Name: Brokers Page
 *
 * Template for displaying a list of brokers the full-width of the page.
 *
 * @package piproomz
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );

$args = array(
	'post_type'			=> 'broker',
	'orderby'			=> 'title', 
	'order'				=> 'ASC',
	'meta_query' 		=> array(
		array(
			'key' 		=> 'broker_staff_pick',
			'value'		 => '1',
		)
	)
);
$staff_pick_brokers = new WP_query( $args );

$post_count = wp_count_posts( 'broker' )->publish;

$args2 = array(
	'post_type'			=> 'broker',
	'posts_per_page'    =>  -1, 
	'orderby'			=> 'title', 
	'order'				=> 'ASC',
	// 'meta_query' 		=> array(
	// 	array(
	// 		'key' 		=> 'broker_staff_pick',
	// 		'value'		=> '1',
	// 		'compare' 	=> '!='
	// 	)
	// )
);


$all_brokers = new WP_query( $args2 );


global $post;
?>

<div class="<?php echo esc_attr( $container ); ?> pt-3 pt-md-5" id="content">

	<div class="row">

		<div class="col">

			<?php if ( $staff_pick_brokers->have_posts() ) { ?>

			<h1 class="mb-4"><?php the_title(); ?></h1>
			<h5 class="mt-4">Staff Recommended Brokers</h5>
			<br/>

		</div>
	</div>
	<div class="row">

		<?php while( $staff_pick_brokers->have_posts() ) { 
			$staff_pick_brokers->the_post(); ?>

			<div class="col-12 col-md-6 col-lg-4 ">

				<div class="card mb-3 border-0 text-center " style="background: #fff;">

					<a href="<?php the_field('broker_url'); ?>">
						<img class="card-img-top p-5 p-xl-4" src="<?php the_field('broker_logo'); ?>" />
					</a> 

					<div class="card-body bg-light d-flex flex justify-content-center align-items-end">

						<div class="r">
							<div class="h4 mb-0 text-secondary sr-only">
								<?php the_title(); ?>
							</div>
							<a class="btn btn-large btn-success px-xl-3 mb-3" href="<?php the_field('broker_url'); ?>">Setup Your Account</a>
							<!-- <p class="mb-0 small"><a href="<?php // the_permalink();?>">Learn More</a></p> -->
						</div>

					</div>

				</div>

			</div>


			<?php } ?>


			<?php wp_reset_postdata(); ?> 

			<?php } ?>

		</div>


	</div><!-- Container end -->
	<?php get_footer(); ?>
