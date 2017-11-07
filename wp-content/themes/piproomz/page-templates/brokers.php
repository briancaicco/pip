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


												<table class="table table-responsive mt-5">
												  <thead class="thead-light">
												    <tr>
												      <th scope="col">Broker Information</th>
												      <th scope="col"></th>
												    </tr>
												  </thead>
												  <tbody>
												    <tr>
												      <td>Type</td>
												      <td>Country</td>
												      <td>Regulators</td>
												      <td>US Clients</td>
												      <td>Additional Info</td>
												    </tr>
												    <tr>
												      <td><?php the_field('broker_type'); ?></td>
												      <td><?php the_field('broker_country'); ?></td>
												      <td><?php the_field('broker_regulators'); ?></td>
												      <td><?php the_field('broker_us_clients'); ?></td>
												      <td><?php the_field('broker_additional_info'); ?></td>
												    </tr>
												  </tbody>
												</table>

												<table class="table table-responsive">
												  <thead class="thead-light">
												    <tr>
												      <th scope="col">Trading Insturments</th>
												      <th scope="col"></th>
												    </tr>
												  </thead>
												  <tbody>
												    <tr>
												      <td>Total Currency Pairs</td>
												      <td>Gold &amp; Silver</td>
												      <td>CDFs</td>
												      <td>Other Insturments</td>
												    </tr>
												    <tr>
												      <td><?php the_field('broker_total_currency_pairs'); ?></td>
												      <td><?php the_field('broker_gold_silver_trading'); ?></td>
												      <td><?php the_field('broker_cdf_trading'); ?></td>
												      <td><?php the_field('broker_other_trading_instruments'); ?></td>
												    </tr>
												  </tbody>
												</table>


												<table class="table table-responsive">
												  <thead class="thead-light">
												    <tr>
												      <th scope="col">Trading Conditions</th>
												      <th scope="col"></th>
												    </tr>
												  </thead>
												  <tbody>
												    <tr>
												      <td>Commission Fee</td>
												      <td>Spread Type</td>
												      <td>Lowest Spreads</td>
												      <td>Premium Trading</td>
												      <td>Scalping</td>
												      <td>Hedging</td>
												    </tr>
												    <tr>
												      <td><?php the_field('broker_fee_commission'); ?></td>
												      <td><?php the_field('broker_spread_type'); ?></td>
												      <td><?php the_field('broker_lowest_spreads'); ?></td>
												      <td><?php the_field('broker_premium_trading'); ?></td>
												      <td><?php the_field('broker_scalping'); ?></td>
												      <td><?php the_field('broker_hedging'); ?></td>
												    </tr>
												  </tbody>
												</table>

												<table class="table table-responsive">
												  <thead class="thead-light">
												    <tr>
												      <th scope="col">Trading Tools</th>
												      <th scope="col"></th>
												    </tr>
												  </thead>
												  <tbody>
												    <tr>
												      <td>Supported Platforms</td>
												      <td>Platform Time Zone</td>
												      <td>Trailing Stops</td>
												      <td>OCO Orders</td>
												      <td>One Click Execution</td>
												      <td>Mobile Trading</td>
												      <td>Web Based Trading</td>
												      <td>API Solutions</td>
												    </tr>
												    <tr>
												      <td><?php the_field('broker_supported_platforms'); ?></td>
												      <td><?php the_field('broker_platform_timezone'); ?></td>
												      <td><?php the_field('broker_trailing_stops'); ?></td>
												      <td><?php the_field('broker_oco_orders'); ?></td>
												      <td><?php the_field('broker_one_click_execution'); ?></td>
												      <td><?php the_field('broker_mobile_trading'); ?></td>
												      <td><?php the_field('broker_web_trading'); ?></td>
												      <td><?php the_field('broker_api_solutions'); ?></td>
												    </tr>
												  </tbody>
												</table>

												<table class="table table-responsive">
												  <thead class="thead-light">
												    <tr>
												      <th scope="col">Account Specifications</th>
												      <th scope="col"></th>
												    </tr>
												  </thead>
												  <tbody>
												    <tr>
												      <td>Mini Account</td>
												      <td>Standard Account</td>
												      <td>ECN Account</td>
												      <td>Account Currency</td>
												      <td>Maximum Leverage</td>
												      <td>Minimal Lot Size</td>
												      <td>Funding Methods</td>
												      <td>Withdrawal Methods</td>

												    </tr>
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

												<table class="table table-responsive">
												  <thead class="thead-light">
												    <tr>
												      <th scope="col">Account Options</th>
												      <!-- <th scope="col"></th> -->
												    </tr>
												  </thead>
												  <tbody>
												    <tr>
												      <td>MAM/PAMM Accounts</td>
												      <td>Managed Accounts</td>
												      <td>Swap-free Accounts</td>
												      <td>OCO Orders</td>
												      <td>Segregated Accounts</td>
												      <td>Interest on Margin</td>
												      <td>Bonuses &amp; Rewards</td>
												      <td>Trading Contests</td>
												    </tr>
												    <tr>
												      <td><?php the_field('broker_mam_accounts'); ?></td>
												      <td><?php the_field('broker_managed_accounts'); ?></td>
												      <td><?php the_field('broker_swap_free_accounts'); ?></td>
												      <td><?php the_field('broker_oco_orders'); ?></td>
												      <td><?php the_field('broker_segregated_accounts'); ?></td>
												      <td><?php the_field('broker_interest_on_margin'); ?></td>
												      <td><?php the_field('broker_bonuses'); ?></td>
												      <td><?php the_field('broker_trading_contests'); ?></td>
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
