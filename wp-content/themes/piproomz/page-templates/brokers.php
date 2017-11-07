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

$posts = get_posts(array(
	'posts_per_page'	=> 50,
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

										<?php if ( the_field('broker_editors_review') ); ?>

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

								<?php 

								$i++;

								endforeach; ?>

							</div>

							<?php wp_reset_postdata(); ?> 

						<?php endif; ?>

						<!-- The pagination component -->
						<?php understrap_pagination(); ?>
					</div>

				</div>

			</div>

		</div>

	</div><!-- Container end -->
	<?php get_footer(); ?>
