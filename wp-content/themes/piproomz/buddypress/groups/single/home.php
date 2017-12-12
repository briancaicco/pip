<?php
/**
 * BuddyPress - Groups Home
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>
<div id="buddypress">
	<div class="container-fluid px-0 room-chart" >

		<?php if ( bp_has_groups() ) : while ( bp_groups() ) : bp_the_group(); ?>
			<div class="row">
				<?php if ( bp_is_group_home() ) { ?>
				<div class="col-12 trader-view">
					<div class="trading-view-bg"></div>
					<!-- TradingView Widget BEGIN -->
					<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
					<script type="text/javascript">
						new TradingView.widget({
							"autosize": true,
							"symbol": "<?php echo esc_attr( bp_get_group_name() ); ?>",
							"interval": "1",
							"timezone": "Etc/UTC",
							"theme": "light",
							"style": "1",
							"locale": "en",
							"toolbar_bg": "#f1f3f6",
							"enable_publishing": false,
							"hide_side_toolbar": false,
							"calendar": true,
						// "news": [
						// "headlines"
						// ],
						"hideideas": true
					});
				</script>
				<!-- TradingView Widget END -->
			</div>
			<?php } ?>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-md-8 pt-5">
				<div class="col mb-3">
					<h1><?php echo esc_attr( bp_get_group_name() ); ?></h1>
				</div>
				<?php do_action( 'bp_before_group_home_content' ); ?>

			<!--<div id="item-header" role="complementary">

					<?php
					/**
					 * If the cover image feature is enabled, use a specific header
					 */
					// if ( bp_group_use_cover_image_header() ) :
					// 	bp_get_template_part( 'groups/single/cover-image-header' );
					// else :
					// 	bp_get_template_part( 'groups/single/group-header' );
					// endif;
					?>

				</div> #item-header -->

				<nav class="sub-nav navbar mb-2">
				<!-- <div id="item-nav">
						<div class="sub-nav item-list-tabs no-ajax" id="object-nav" aria-label="<?php esc_attr_e( 'Group primary navigation', 'buddypress' ); ?>" role="navigation">
							<ul class="nav nav-pills">

								<?php bp_get_options_nav(); ?>

								<?php do_action( 'bp_group_options_nav' ); ?>

							</ul>
						</div>
					</div> -->
				</nav>

				<div id="item-body">

				<?php if ( bp_is_group_home() ) { ?>

				<?php } ?>
				<?php

				/**
				* Fires before the display of the group home body.
				*
				* @since 1.2.0
				*/
				do_action( 'bp_before_group_body' );

				/**
				* Does this next bit look familiar? If not, go check out WordPress's
				* /wp-includes/template-loader.php file.
				*
				* @todo A real template hierarchy? Gasp!
				*/

				// Looking at home location
				if ( bp_is_group_home() ) :

				if ( bp_group_is_visible() ) {

						// Load appropriate front template
					bp_groups_front_template_part();

				} else {

						/**
						 * Fires before the display of the group status message.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_before_group_status_message' ); ?>

						<div id="message" class="info">
							<p><?php bp_group_status_message(); ?></p>
						</div>

						<?php

						/**
						 * Fires after the display of the group status message.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_after_group_status_message' );

					}

				// Not looking at home
				else :

					// Group Admin
					if     ( bp_is_group_admin_page() ) : bp_get_template_part( 'groups/single/admin'        );

					// Group Activity
						elseif ( bp_is_group_activity()   ) : bp_get_template_part( 'groups/single/activity'     );

					// Group Members
							elseif ( bp_is_group_members()    ) : bp_groups_members_template_part();

					// Group Invitations
								elseif ( bp_is_group_invites()    ) : bp_get_template_part( 'groups/single/send-invites' );

					// Old group forums
									elseif ( bp_is_group_forum()      ) : bp_get_template_part( 'groups/single/forum'        );

					// Membership request
										elseif ( bp_is_group_membership_request() ) : bp_get_template_part( 'groups/single/request-membership' );

					// Anything else (plugins mostly)
											else                                : bp_get_template_part( 'groups/single/plugins'      );

											endif;

										endif;

				/**
				* Fires after the display of the group home body.
				*
				* @since 1.2.0
				*/
				do_action( 'bp_after_group_body' ); ?>

				</div><!-- #item-body -->
					<?php do_action( 'bp_after_group_home_content' ); ?>
					<?php endwhile; endif; ?>
			</div>
			<div class="col-md-4 pr-0 ">
				<div class="sticky-top pt-5">
					<?php

						$groupName = bp_group_name();

						if( $groupName = 'XPTUSD') : $chatRoomId = '1';
						elseif( $groupName = 'NZDUSD') : $chatRoomId = '2';
						elseif( $groupName = 'XRPUSD') : $chatRoomId = '3';
						elseif( $groupName = 'GBPNZD') : $chatRoomId = '4';
						elseif( $groupName = 'CHFJPY') : $chatRoomId = '5';
						elseif( $groupName = 'EURGBP') : $chatRoomId = '6';
						elseif( $groupName = 'GBPCHF') : $chatRoomId = '7';
						elseif( $groupName = 'GBPCAD') : $chatRoomId = '8';
						elseif( $groupName = 'USDCAD') : $chatRoomId = '9';
						elseif( $groupName = 'EURAUD') : $chatRoomId = '10';
						elseif( $groupName = 'NZDJPY') : $chatRoomId = '11';
						elseif( $groupName = 'GOLD')   : $chatRoomId = '12';
						elseif( $groupName = 'EURNZD') : $chatRoomId = '13';
						elseif( $groupName = 'EURJPY') : $chatRoomId = '14';
						elseif( $groupName = 'AUDUSD') : $chatRoomId = '15';
						elseif( $groupName = 'BTCUSD') : $chatRoomId = '16';
						elseif( $groupName = 'GBPJPY') : $chatRoomId = '17';
						elseif( $groupName = 'GBPUSD') : $chatRoomId = '18';
						elseif( $groupName = 'EURTRY') : $chatRoomId = '19';
						elseif( $groupName = 'EURUSD') : $chatRoomId = '20';
						elseif( $groupName = 'ETHUSD') : $chatRoomId = '21';
						elseif( $groupName = 'USDJPY') : $chatRoomId = '22';
						endif;
					?>

					<div data-room-id="<?php echo $chatRoomId; ?>" data-height="600px" data-width="100%" class="iflychat-embed"></div>
				</div>
			</div>
		</div>
	</div><!-- Container -->

</div><!-- #buddypress -->
