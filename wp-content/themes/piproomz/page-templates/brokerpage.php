<?php 

/**
 * Template Name: Broker Page
 *
 * Template for displaying a list of brokers the full-width of the page.
 *
 * @package piproomz
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'broker'
));
?>

<div class="<?php echo esc_attr( $container ); ?>" id="content">

	<div class="row">

		<div class="col">

			<div class="card my-3 my-sm-5 p-3 p-md-4 p-lg-5">

				<div class="card-body">


						<? if( $posts ): ?>

								
							<?php foreach( $posts as $post ): 
								
								setup_postdata( $post );
								
								?>
								<div class="card el-3">
									<div class="card-body">
										<div class="row d-flex justify-content-between toggle collapsed " data-toggle="collapse" data-target="#broker_info" aria-expanded="false" aria-controls="broker_info">
											<div class="col-10">
												<h3><?php the_title(); ?></h3>
											</div>
											<div class="col-2">
												<div class="toggle">
													<i class="fa fa-plus-square-o" aria-hidden="true"></i>
													<i class="fa fa-minus-square-o" aria-hidden="true"></i>
												</div>
											</div>
										</div>
										<div class="collapse" id="broker_info">
											<div class="row">
												<div class="col-12">
													<?php the_field('broker_editors_review'); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							
							<?php endforeach; ?>
							
							
							<?php wp_reset_postdata(); ?>

						<?php endif; ?>



				</div>

			</div>

		</div>

	</div>

</div><!-- Container end -->