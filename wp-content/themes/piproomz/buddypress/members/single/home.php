<?php
/**
 * BuddyPress - Members Home
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

<div id="buddypress">
	<?php

	/**
	 * Fires before the display of member home content.
	 *
	 * @since 1.2.0
	 */
	do_action( 'bp_before_member_home_content' ); ?>


<div class="row">
	
	<div class="col-3">
		<div class="row">
			<div class="col-12 p-0">
				<div id="item-header-cover-image">
					<div id="item-header-avatar">
						<a href="<?php bp_displayed_user_link(); ?>">
							<?php bp_displayed_user_avatar( 'type=full&width=500' ); ?>
						</a>
					</div><!-- #item-header-avatar -->
				</div>
			</div>	
			<div class="col-12 bg-dark">
				<div id="item-header" class="px-3 pt-3 pb-0 text-light" role="complementary">
					<?php
					/**
					 * If the cover image feature is enabled, use a specific header
					 */
					if ( bp_displayed_user_use_cover_image_header() ) :
						bp_get_template_part( 'members/single/cover-image-header' );
					else :
						bp_get_template_part( 'members/single/member-header' );
					endif;
					?>

				</div><!-- #item-header -->

				<div id="item-nav">
					<div class="item-list-tabs no-ajax" id="object-nav" aria-label="<?php esc_attr_e( 'Member primary navigation', 'buddypress' ); ?>" role="navigation">
						<ul class="list-group pb-3">

							<?php //bp_get_displayed_user_nav(); 

								pip_edit_profile_nav_items();
							?>

							<?php

							/**
							 * Fires after the display of member options navigation.
							 *
							 * @since 1.2.4
							 */
							do_action( 'bp_member_options_nav' ); ?>

						</ul>
					</div>
				</div><!-- #item-nav -->
			</div>
		</div>
	</div>
	<div class="col-9 pl-4">

		<div id="item-body">

			<?php

			/**
			 * Fires before the display of member body content.
			 *
			 * @since 1.2.0
			 */
			do_action( 'bp_before_member_body' );

			if ( bp_is_user_front() ) :
				bp_displayed_user_front_template_part();

			elseif ( bp_is_user_activity() ) :
				bp_get_template_part( 'members/single/activity' );

			elseif ( bp_is_user_blogs() ) :
				bp_get_template_part( 'members/single/blogs'    );

			elseif ( bp_is_user_friends() ) :
				bp_get_template_part( 'members/single/friends'  );

			elseif ( bp_is_user_groups() ) :
				bp_get_template_part( 'members/single/groups'   );

			elseif ( bp_is_user_messages() ) :
				bp_get_template_part( 'members/single/messages' );

			elseif ( bp_is_user_profile() ) :
				bp_get_template_part( 'members/single/profile'  );

			elseif ( bp_is_user_forums() ) :
				bp_get_template_part( 'members/single/forums'   );

			elseif ( bp_is_user_notifications() ) :
				bp_get_template_part( 'members/single/notifications' );

			elseif ( bp_is_user_settings() ) :
				bp_get_template_part( 'members/single/settings' );

			// If nothing sticks, load a generic template
			else :
				bp_get_template_part( 'members/single/plugins'  );

			endif;

			/**
			 * Fires after the display of member body content.
			 *
			 * @since 1.2.0
			 */
			do_action( 'bp_after_member_body' ); ?>

		</div><!-- #item-body -->
	</div>
</div>
	<?php

	/**
	 * Fires after the display of member home content.
	 *
	 * @since 1.2.0
	 */
	do_action( 'bp_after_member_home_content' ); ?>

</div><!-- #buddypress -->
