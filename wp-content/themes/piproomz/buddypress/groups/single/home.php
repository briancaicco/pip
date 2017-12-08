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
						"calendar": false,
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
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-md-9">
			<div class="col mb-3">
				<h1><?php echo esc_attr( bp_get_group_name() ); ?></h1>
			</div>
			<?php

			/**
			 * Fires before the display of the group home content.
			 *
			 * @since 1.2.0
			 */
			do_action( 'bp_before_group_home_content' ); ?>

			<div id="item-header" role="complementary">

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

			</div><!-- #item-header -->
			
			<nav class="navbar bg-light mb-2">
				<div id="item-nav">
					
					<div class="sub-nav item-list-tabs no-ajax" id="object-nav" aria-label="<?php esc_attr_e( 'Group primary navigation', 'buddypress' ); ?>" role="navigation">
						<ul class="nav nav-pills">

							<?php bp_get_options_nav(); ?>

							<?php

							/**
							 * Fires after the display of group options navigation.
							 *
							 * @since 1.2.0
							 */
							do_action( 'bp_group_options_nav' ); ?>

						</ul>
					</div>
				</div><!-- #item-nav -->
			</nav>
		</div>
		<div class="col-md-3">
			<div data-room-id="0" data-height="100%" data-width="100%" class="iflychat-embed"></div>
		</div>
	</div>

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

	<?php

	/**
	 * Fires after the display of the group home content.
	 *
	 * @since 1.2.0
	 */
	do_action( 'bp_after_group_home_content' ); ?>

<?php endwhile; endif; ?>

</div><!-- Container -->

</div><!-- #buddypress -->
