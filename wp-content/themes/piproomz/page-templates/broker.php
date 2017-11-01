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
	'post_type'			=> 'broker',
	'orderby'			=> 'title', 
	'order'				=> 'ASC'
));
?>

<div class="<?php echo esc_attr( $container ); ?>" id="content">

	<div class="row">

		<div class="col">

			<div class="card my-3 my-sm-5 p-3 p-md-4 p-lg-5">

				<div class="card-body">

					<h1 class="mb-4"><?php the_title(); ?></h1>

					<?php if( $posts ): ?>

						<div id="brokers" data-children=".broker">

							<?php 

							$i=0;

							foreach( $posts as $post ): 

								setup_postdata( $post );

								?>

								<div class="broker card el-1 mb-3">

									<div class="p-3 toggle" data-toggle="collapse" data-parent="#brokers" href="#brokerItem<?php echo $i; ?>" aria-expanded="false" aria-controls="brokerItem<?php echo $i; ?>">

										<div class="d-flex justify-content-between" >
											<span class="h4 mb-0 text-secondary">
												<?php the_title(); ?>
											</span>
											<span class="h3 mb-0 text-secondary">
												<i class="fa fa-plus-square-o" aria-hidden="true"></i>
												<i class="fa fa-minus-square-o" aria-hidden="true"></i>
											</span>
										</div>

									</div>

									<div id="brokerItem<?php echo $i; ?>" class="collapse p-3" role="tabpanel">
										<?php if ( the_field('broker_editors_review') ){ the_field('broker_editors_review'); } else { the_content(); } ?>	
									</div>

								</div>


								<?php 

								$i++;

								endforeach; ?>

						</div>

								<?php wp_reset_postdata(); ?> 

						<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

</div><!-- Container end -->
<?php get_footer(); ?>
