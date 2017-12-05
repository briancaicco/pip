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

<div class="<?php echo esc_attr( $container ); ?>" id="content">

	<div class="row">

		<div class="col">

			<div class="card my-3 my-sm-5 p-3 p-md-4 p-lg-5">

				<?php if ( $staff_pick_brokers->have_posts() ) { ?>

				<div class="card-body">

					<h1 class="mb-4"><?php the_title(); ?></h1>
					<!-- <h4 class="text-uppercase">Please read carefully</h4> -->
					<p class="h5">There are <span class="badge badge-secondary"><?php echo $post_count; ?></span> brokers in this directory. <strong>Not all of them are credible!</strong> <a class="text-danger text-uppercase small" data-toggle="collapse" data-parent="#brokers" href="#warning" aria-expanded="false" aria-controls="warning" >Learn More</a></p>
					
					<div class="collapse p-3" id="warning" role="tabpanel">
						<p>We've spent years researching and doing trials with various brokers in this directory.<br/> (In one case losing $20,000 from making the wrong choice.)</p>
						
						<p>A handful of them are excellent, some are good and many can't be trusted.</p> 

						<p>We encourage you to do your own research but also to take advantage of the work we've done.<br/> Learn from our mistakes and avoid losing money by making the right choice.</p>

						<p>Below, in the Staff Recommended Brokers section you will find the brokers that we've trusted with thousands of dollars. These brokers are outstanding in many areas such as account verification time, customer service, fair terms, fast payout times and low fees.</p> 
						
						<p>If you have any questions regarding brokers in this directory please don't hesitate to contact us at <a href="mailto:support@piproomz.com">support@piproomz.com</a></p>

						<p>Happy trading!</p>
					</div>

					<h5 class="mt-4">Staff Recommended Brokers</h5>
					<br/>

					<?php while( $staff_pick_brokers->have_posts() ) { 
						$staff_pick_brokers->the_post(); ?>

						<div class="broker recommended card mb-3">

							<div class="p-3 toggle rounded-top" data-toggle="collapse" data-parent="#brokers" href="#brokerItem<?php echo $post->ID; ?>" aria-expanded="false" aria-controls="brokerItem<?php echo $post->ID; ?>">

								<div class="d-flex justify-content-between align-content-middle" >
									<?php if( get_field('broker_logo') ): ?> <a href="<?php the_field('broker_url'); ?>" class="broker-logo d-table" ><img class="" src="<?php the_field('broker_logo'); ?>" /></a> <?php endif; ?>
									<span class="h4 mb-0 text-secondary" <?php if( get_field('broker_logo') ): ?>style="margin-left: 180px;"<?php endif; ?>>
										<?php the_title(); ?>
									</span>
									<span class="h3 mb-0 text-secondary">
										<i class="fa fa-plus-square-o" aria-hidden="true"><span class="text-uppercase" style="font-size: 11px; position: absolute; top: 32px; right: 54px; ">More Info </span></i>
										<i class="fa fa-minus-square-o" aria-hidden="true"><span class="text-uppercase" style="font-size: 11px; position: absolute; top: 32px; right: 54px; ">Less Info </span></i>
									</span>
								</div>

							</div>

							<div id="brokerItem<?php echo $post->ID; ?>" class="collapse p-3" role="tabpanel">

								<h5>Broker Information</h5>
								<table class="table table-responsive">
									<thead class="thead-light">
										<tr>
											<th scope="col">Type</th>
											<th scope="col">Country</th>
											<th scope="col">Regulators</th>
											<th scope="col">US Clients</th>
											<th scope="col">Additional Info</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php the_field('broker_type'); ?></td>
											<td><?php the_field('broker_country'); ?></td>
											<td><?php the_field('broker_regulators'); ?></td>
											<td><?php $var1 = get_field('broker_us_clients'); if ($var1 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php the_field('broker_additional_info'); ?></td>
										</tr>
									</tbody>
								</table>

								<h5>Trading Insturments</h5>
								<table class="table table-responsive">
									<thead class="thead-light">
										<tr>
											<th scope="col">Total Currency Pairs</th>
											<th scope="col">Gold &amp; Silver</th>
											<th scope="col">CDFs</th>
											<th scope="col">Other Insturments</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php the_field('broker_total_currency_pairs'); ?></td>
											<td><?php the_field('broker_gold_silver_trading'); ?></td>
											<td><?php the_field('broker_cdf_trading'); ?></td>
											<td><?php the_field('broker_other_trading_instruments'); ?></td>
										</tr>
									</tbody>
								</table>

								<h5>Trading Conditions</h5>
								<table class="table table-responsive">
									<thead class="thead-light">
										<tr>
											<th scope="col">Commission Fee</th>
											<th scope="col">Spread Type</th>
											<th scope="col">Lowest Spreads</th>
											<th scope="col">Premium Trading</th>
											<th scope="col">Scalping</th>
											<th scope="col">Hedging</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php $var2 = get_field('broker_fee_commission'); if ($var2 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php the_field('broker_spread_type'); ?></td>
											<td><?php the_field('broker_lowest_spreads'); ?></td>
											<td><?php the_field('broker_premium_trading'); ?></td>
											<td><?php the_field('broker_scalping'); ?></td>
											<td><?php the_field('broker_hedging'); ?></td>
										</tr>
									</tbody>
								</table>
								<h5>Trading Tools</h5>
								<table class="table table-responsive">
									<thead class="thead-light">
										<tr>
											<th scope="col">Supported Platforms</th>
											<th scope="col">Platform Time Zone</th>
											<th scope="col">Trailing Stops</th>
											<th scope="col">OCO Orders</th>
											<th scope="col">One Click Execution</th>
											<th scope="col">Mobile Trading</th>
											<th scope="col">Web Based Trading</th>
											<th scope="col">API Solutions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php the_field('broker_supported_platforms'); ?></td>
											<td><?php the_field('broker_platform_timezone'); ?></td>
											<td><?php $var3 = get_field('broker_trailing_stops'); if ($var3 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var4 = get_field('broker_oco_orders'); if ($var4 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var5 = get_field('broker_one_click_execution'); if ($var5 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var6 = get_field('broker_mobile_trading'); if ($var6 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var7 = get_field('broker_web_trading'); if ($var7 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php the_field('broker_api_solutions'); ?></td>
										</tr>
									</tbody>
								</table>

								<h5>Account Specifications</h5>
								<table class="table table-responsive">
									<thead class="thead-light">
										<tr>
											<th scope="col">Mini Account</th>
											<th scope="col">Standard Account</th>
											<th scope="col">ECN Account</th>
											<th scope="col">Account Currency</th>
											<th scope="col">Maximum Leverage</th>
											<th scope="col">Minimal Lot Size</th>
											<th scope="col">Funding Methods</th>
											<th scope="col">Withdrawal Methods</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php the_field('broker_mini_account'); ?></td>
											<td><?php the_field('broker_standard_account'); ?></td>
											<td><?php the_field('broker_ecn_account'); ?></td>
											<td><?php the_field('broker_account_currency'); ?></td>
											<td><?php the_field('broker_max_leverage'); ?></td>
											<td><?php the_field('broker_minimal_lot_size'); ?></td>
											<td><?php the_field('broker_deposit_methods'); ?></td>
											<td><?php the_field('broker_withdrawal_methods'); ?></td>
										</tr>
									</tbody>
								</table>
								<h5>Account Options</h5>
								<table class="table table-responsive">
									<thead class="thead-light">
										<tr>
											<th scope="col">MAM/PAMM Accounts</th>
											<th scope="col">Managed Accounts</th>
											<th scope="col">Swap-free Accounts</th>
											<th scope="col">OCO Orders</th>
											<th scope="col">Segregated Accounts</th>
											<th scope="col">Interest on Margin</th>
											<th scope="col">Bonuses &amp; Rewards</th>
											<th scope="col">Trading Contests</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php the_field('broker_mam_accounts'); ?></td>

											<td><?php $var8 = get_field('broker_managed_accounts'); if ($var8 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var9 = get_field('broker_swap_free_accounts'); if ($var9 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var10 = get_field('broker_oco_orders'); if ($var10 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var11 = get_field('broker_segregated_accounts'); if ($var11 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var12 = get_field('broker_interest_on_margin'); if ($var12 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var13 = get_field('broker_bonuses'); if ($var13 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
											<td><?php $var14 = get_field('broker_trading_contests'); if ($var14 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>

										</tr>
									</tbody>
								</table>

							</div>


							<div class="row pt-3 pb-4 justify-content-center">
								<div class="col-5 text-center">
									<a class="btn btn-lg d-block btn-success" href="<?php the_field('broker_url'); ?>">Setup Your Account</a>
									<?php  $review = get_field('broker_editors_review'); if (!$review == ''){ ?><a href="<?php the_permalink($id); ?>" class="text-secondary d-block mt-1" style="font-size: 12px; opacity: .7; font-weight: 300;">or Read In-Depth Review</a><?php } ?>
								</div>
							</div>



						</div>


						<?php } ?>

						
						<?php wp_reset_postdata(); ?> 

						<?php } ?>


						<?php if ( $all_brokers->have_posts() ) { ?>

						<p class="m-5"></p>
						<hr/>
						<p class="m-5"></p>
						<h5>All Other Brokers</h5>

						<div id="brokers" data-children=".broker">

							<?php while( $all_brokers->have_posts() ) { 
								$all_brokers->the_post(); ?>

							<?php 
							// Display for Basic and Pro Members
							if(current_user_can('mepr-active','membership:4124,4007')){ ?>
							<div class="broker card el-1 mb-3">

								<div class="p-3 toggle" data-toggle="collapse" data-parent="#brokers" href="#brokerItem<?php echo $post->ID; ?>" aria-expanded="false" aria-controls="brokerItem<?php echo $post->ID; ?>">

									<div class="d-flex justify-content-between" >
										<span class="h4 mb-0 text-secondary">
											<?php the_title(); ?>
										</span>
										<span class="h3 mb-0 text-secondary">
											<i class="fa fa-plus-square-o" aria-hidden="true"><span class="text-uppercase" style="font-size: 11px; position: absolute; top: 32px; right: 54px; ">More Info </span></i>
											<i class="fa fa-minus-square-o" aria-hidden="true"><span class="text-uppercase" style="font-size: 11px; position: absolute; top: 32px; right: 54px; ">Less Info </span></i>
										</span>
									</div>

								</div>

								<div id="brokerItem<?php echo $post->ID; ?>" class="collapse p-3" role="tabpanel">

									<?php // if ( the_field('broker_editors_review') ); ?>

									<h5>Broker Information</h5>
									<table class="table table-responsive">
										<thead class="thead-light">
											<tr>
												<th scope="col">Type</th>
												<th scope="col">Country</th>
												<th scope="col">Regulators</th>
												<th scope="col">US Clients</th>
												<th scope="col">Additional Info</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php the_field('broker_type'); ?></td>
												<td><?php the_field('broker_country'); ?></td>
												<td><?php the_field('broker_regulators'); ?></td>
												<td><?php $var1 = get_field('broker_us_clients'); if ($var1 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php the_field('broker_additional_info'); ?></td>
											</tr>
										</tbody>
									</table>

									<h5>Trading Insturments</h5>
									<table class="table table-responsive">
										<thead class="thead-light">
											<tr>
												<th scope="col">Total Currency Pairs</th>
												<th scope="col">Gold &amp; Silver</th>
												<th scope="col">CDFs</th>
												<th scope="col">Other Insturments</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php the_field('broker_total_currency_pairs'); ?></td>
												<td><?php the_field('broker_gold_silver_trading'); ?></td>
												<td><?php the_field('broker_cdf_trading'); ?></td>
												<td><?php the_field('broker_other_trading_instruments'); ?></td>
											</tr>
										</tbody>
									</table>

									<h5>Trading Conditions</h5>
									<table class="table table-responsive">
										<thead class="thead-light">
											<tr>
												<th scope="col">Commission Fee</th>
												<th scope="col">Spread Type</th>
												<th scope="col">Lowest Spreads</th>
												<th scope="col">Premium Trading</th>
												<th scope="col">Scalping</th>
												<th scope="col">Hedging</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php $var2 = get_field('broker_fee_commission'); if ($var2 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php the_field('broker_spread_type'); ?></td>
												<td><?php the_field('broker_lowest_spreads'); ?></td>
												<td><?php the_field('broker_premium_trading'); ?></td>
												<td><?php the_field('broker_scalping'); ?></td>
												<td><?php the_field('broker_hedging'); ?></td>
											</tr>
										</tbody>
									</table>

									<h5>Trading Tools</h5>
									<table class="table table-responsive">
										<thead class="thead-light">
											<tr>
												<th scope="col">Supported Platforms</th>
												<th scope="col">Platform Time Zone</th>
												<th scope="col">Trailing Stops</th>
												<th scope="col">OCO Orders</th>
												<th scope="col">One Click Execution</th>
												<th scope="col">Mobile Trading</th>
												<th scope="col">Web Based Trading</th>
												<th scope="col">API Solutions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php the_field('broker_supported_platforms'); ?></td>
												<td><?php the_field('broker_platform_timezone'); ?></td>
												<td><?php $var3 = get_field('broker_trailing_stops'); if ($var3 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var4 = get_field('broker_oco_orders'); if ($var4 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var5 = get_field('broker_one_click_execution'); if ($var5 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var6 = get_field('broker_mobile_trading'); if ($var6 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var7 = get_field('broker_web_trading'); if ($var7 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php the_field('broker_api_solutions'); ?></td>
											</tr>
										</tbody>
									</table>

									<h5>Account Specifications</h5>
									<table class="table table-responsive">
										<thead class="thead-light">
											<tr>
												<th scope="col">Mini Account</th>
												<th scope="col">Standard Account</th>
												<th scope="col">ECN Account</th>
												<th scope="col">Account Currency</th>
												<th scope="col">Maximum Leverage</th>
												<th scope="col">Minimal Lot Size</th>
												<th scope="col">Funding Methods</th>
												<th scope="col">Withdrawal Methods</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php the_field('broker_mini_account'); ?></td>
												<td><?php the_field('broker_standard_account'); ?></td>
												<td><?php the_field('broker_ecn_account'); ?></td>
												<td><?php the_field('broker_account_currency'); ?></td>
												<td><?php the_field('broker_max_leverage'); ?></td>
												<td><?php the_field('broker_minimal_lot_size'); ?></td>
												<td><?php the_field('broker_deposit_methods'); ?></td>
												<td><?php the_field('broker_withdrawal_methods'); ?></td>
											</tr>
										</tbody>
									</table>

									<h5>Account Options</h5>
									<table class="table table-responsive">
										<thead class="thead-light">
											<tr>
												<th scope="col">MAM/PAMM Accounts</th>
												<th scope="col">Managed Accounts</th>
												<th scope="col">Swap-free Accounts</th>
												<th scope="col">OCO Orders</th>
												<th scope="col">Segregated Accounts</th>
												<th scope="col">Interest on Margin</th>
												<th scope="col">Bonuses &amp; Rewards</th>
												<th scope="col">Trading Contests</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php the_field('broker_mam_accounts'); ?></td>

												<td><?php $var8 = get_field('broker_managed_accounts'); if ($var8 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var9 = get_field('broker_swap_free_accounts'); if ($var9 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var10 = get_field('broker_oco_orders'); if ($var10 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var11 = get_field('broker_segregated_accounts'); if ($var11 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var12 = get_field('broker_interest_on_margin'); if ($var12 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var13 = get_field('broker_bonuses'); if ($var13 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>
												<td><?php $var14 = get_field('broker_trading_contests'); if ($var14 == 1){ echo 'Yes'; } else { echo 'No'; } ?></td>

											</tr>
										</tbody>
									</table>

								</div>

							</div>
							<?php } ?>

						<?php } ?>

						</div>

						<?php wp_reset_postdata(); ?> 

					<?php } ?>

					</div>

				</div>

			</div>

		</div>

	</div><!-- Container end -->
	<?php get_footer(); ?>
