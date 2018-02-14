
<?php 

if(current_user_can('pro_member')) {

	$query = new WP_Query( array( 'post_type' => 'signal', 'posts_per_page' => '6') );
	$restrict = false;

	?>
	<?php $i=0; if ( $query->have_posts() ) : ?>

	<!-- the loop -->
	<?php while ( $query->have_posts() ) : $query->the_post(); $i++;?>
			<div class="col-6">
				<div class="card mb-3 signal border-0 ">
					<div class="card-body">
						<!-- Signal Title -->
						<div class="d-flex justify-content-between">
							<div>						
								<p><b><?php the_title(); ?></b><br/>
								<?php printf( _x( '%s ago', '%s = human-readable time difference', 'your-text-domain' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?>
								</p>
							</div>
							<!-- Signal Action -->
							<div class="text-right">
								<h2><b><?php the_field('action'); ?></b></h2>
								<p class="lead">@ <?php the_field('open_price'); ?></p>
							</div>
						</div>
						<!-- Signal Positions -->
						<div class="position-wrapper mb-3" data-toggle="collapse" data-target="#positions_<?php echo $i; ?>" aria-expanded="false" aria-controls="positions_<?php echo $i; ?>">
							<div class="row">
								<div class="col">
									<p class="position-toggle">Positions</p>
									<div class="collapse pt-2" id="positions_<?php echo $i; ?>">
										<div class="row">
											<div class="col-6">
												<p><b>Take Profit</b></p>
												<?php pip_signal_tp(); ?>
											</div>
											<div class="col-6">
												<p><b>Stop Loss</b></p>
												<?php pip_signal_sl(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 strength">
								<div class="progress">
									<div class="progress-bar bg-success " style="width: <?php the_field('signal_strength'); ?>%" role="progressbar" aria-valuenow="<?php the_field('signal_strength'); ?>" aria-valuemin="10" aria-valuemax="100">
										<span>&nbsp;&nbsp;Signal Strength&nbsp;&nbsp;</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12">
								<div class="btn-group btn-group-sm" role="group" >

									<?php if( get_field('insight') ): ?>
										<button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#insight_<?php echo $i; ?>" aria-expanded="false" aria-controls="insight_<?php echo $i; ?>">Insight</button>
									<?php endif; ?>

									<?php if( get_field('chart_image') ): ?>
										<button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#chart_<?php echo $i; ?>" aria-expanded="false" aria-controls="chart_<?php echo $i; ?>">Chart</button>
									<?php endif; ?>

								</div>
								<div class="collapse pt-2" id="insight_<?php echo $i; ?>">
									<p><?php the_field('insight'); ?></p>
								</div>
								<div class="collapse pt-2" id="chart_<?php echo $i; ?>">
									<a href="<?php the_field('chart_image'); ?>"><img class="img-fluid" src="<?php the_field('chart_image'); ?>" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php  // if ( $restrict == true and $i == 2 ){ ?>

<!-- 	<div class="col-12 col-md-4">
		<div class="card mb-3 signal border-0 super-el buy-gradient dash-pro-signals">
			<div class="card-body pb-0">
				<p class="text-white"> <span class="font-weight-bold h5">Maximize your trades!</span> <br/>Get the latest signals to your phone.</p>
			</div>
			<div class="card-footer text-center">
				<a href="<?php bloginfo( 'url' ) ?>/subscribe/pro/" class="text-white" >Upgrade to Pro</a>
			</div>
		</div>
	</div> -->

	<?php // } ?> 
<?php endwhile; ?>
<!-- end of the loop -->
<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'No recent signals available.' ); ?></p>

<?php endif; ?>


<?php } else{ ?>

<div class="col-12 col-md-4">
	<div class="card mb-3 signal border-0 super-el buy-gradient dash-pro-signals">
		<div class="card-body pb-0">
			<!-- <p class="lead ">Trade signals via SMS!</p> -->
			<p class="text-white"> <span class="font-weight-bold h5">Maximize your profits!</span> <br/>Get the latest signals via SMS.</p>
		</div>
		<div class="card-footer text-center">
			<a href="<?php bloginfo( 'url' ) ?>/subscribe/pro/" class="text-white" >Upgrade to Pro</a>
		</div>
	</div>
</div>

<?php } $i=0;?>


