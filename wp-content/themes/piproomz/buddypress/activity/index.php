<?php
/**
 * BuddyPress Activity templates
 *
 * @since 2.3.0
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

/**
 * Fires before the activity directory listing.
 *
 * @since 1.5.0
 */
do_action( 'bp_before_directory_activity' ); ?>

<div id="buddypress">
	<div class="container">

	<div class="col-md-8">	

	<?php

	/**
	 * Fires before the activity directory display content.
	 *
	 * @since 1.2.0
	 */
	do_action( 'bp_before_directory_activity_content' ); ?>

	<?php if ( is_user_logged_in() ) : ?>

		<?php bp_get_template_part( 'activity/post-form' ); ?>

	<?php endif; ?>

	<div class="alert alert-primary alert-dismissible fade show" id="template-notices" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
		<?php

		/**
		 * Fires towards the top of template pages for notice display.
		 *
		 * @since 1.0.0
		 */
		do_action( 'template_notices' ); ?>

	</div>

	<div class="item-list-tabs activity-type-tabs" aria-label="<?php esc_attr_e( 'Sitewide activities navigation', 'buddypress' ); ?>" role="navigation">
		
		<nav class="navbar bg-light px-3 pt-0">

			<ul class="nav nav-pills">
				<?php

				/**
				 * Fires before the listing of activity type tabs.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_before_activity_type_tab_all' ); ?>

						<li class="selected nav-item" id="activity-all"><a class="nav-link" href="<?php bp_activity_directory_permalink(); ?>"><?php printf( __( 'All Members %s', 'buddypress' ), '<span class="badge badge-secondary">' . bp_get_total_member_count() . '</span>' ); ?></a></li>
				<?php if ( is_user_logged_in() ) : ?>

					<?php

					/**
					 * Fires before the listing of friends activity type tab.
					 *
					 * @since 1.2.0
					 */
					do_action( 'bp_before_activity_type_tab_friends' ); ?>

					<?php if ( bp_is_active( 'friends' ) ) : ?>

						<?php if ( bp_get_total_friend_count( bp_loggedin_user_id() ) ) : ?>

							<li class="nav-item" id="activity-friends"><a class="nav-link" href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_friends_slug() . '/'; ?>"><?php printf( __( 'My Friends %s', 'buddypress' ), '<span class="badge badge-secondary">' . bp_get_total_friend_count( bp_loggedin_user_id() ) . '</span>' ); ?></a></li>
						<?php endif; ?>

					<?php endif; ?>

					<?php

					/**
					 * Fires before the listing of groups activity type tab.
					 *
					 * @since 1.2.0
					 */
					do_action( 'bp_before_activity_type_tab_groups' ); ?>

					<?php if ( bp_is_active( 'groups' ) ) : ?>

						<?php if ( bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) : ?>

							<li class="nav-item" id="activity-groups"><a class="nav-link" href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_groups_slug() . '/'; ?>"><?php printf( __( 'My Rooms %s', 'buddypress' ), '<span class="badge badge-secondary">' . bp_get_total_group_count_for_user( bp_loggedin_user_id() ) . '</span>' ); ?></a></li>
						<?php endif; ?>

					<?php endif; ?>

					<?php

					/**
					 * Fires before the listing of favorites activity type tab.
					 *
					 * @since 1.2.0
					 */
					do_action( 'bp_before_activity_type_tab_favorites' ); ?>

					<?php if ( bp_get_total_favorite_count_for_user( bp_loggedin_user_id() ) ) : ?>

						<li class="nav-item" id="activity-favorites"><a class="nav-link" href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/favorites/'; ?>"><?php printf( __( 'My Favorites %s', 'buddypress' ), '<span class="badge badge-secondary">' . bp_get_total_favorite_count_for_user( bp_loggedin_user_id() ) . '</span>' ); ?></a></li>
					<?php endif; ?>

					<?php if ( bp_activity_do_mentions() ) : ?>

						<?php

						/**
						 * Fires before the listing of mentions activity type tab.
						 *
						 * @since 1.2.0
						 */
						do_action( 'bp_before_activity_type_tab_mentions' ); ?>

						<li class="nav-item" id="activity-mentions"><a class="nav-link" href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/mentions/'; ?>"><?php _e( 'Mentions', 'buddypress' ); ?><?php if ( bp_get_total_mention_count_for_user( bp_loggedin_user_id() ) ) : ?> <strong><span class="badge badge-secondary"><?php printf( _nx( '%s new', '%s new', bp_get_total_mention_count_for_user( bp_loggedin_user_id() ), 'Number of new activity mentions', 'buddypress' ), bp_get_total_mention_count_for_user( bp_loggedin_user_id() ) ); ?></span></strong><?php endif; ?></a></li>
					<?php endif; ?>

				<?php endif; ?>

				<?php

				/**
				 * Fires after the listing of activity type tabs.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_activity_type_tabs' ); ?>
			</ul>

		</nav>

	</div><!-- .item-list-tabs -->



	<div class="item-list-tabs no-ajax" id="subnav" aria-label="<?php esc_attr_e( 'Activity secondary navigation', 'buddypress' ); ?>" role="navigation">
		<div class="container px-0">

		<ul>
			<?php

			/**
			 * Fires before the display of the activity syndication options.
			 *
			 * @since 1.2.0
			 */
			do_action( 'bp_activity_syndication_options' ); ?>

			<li id="activity-filter-select" class="last mb-3">
				<select id="activity-filter-by" class="custom-select">
					<option value="-1"><?php _e( '&mdash; Everything &mdash;', 'buddypress' ); ?></option>

					<?php bp_activity_show_filters(); ?>

					<?php

					/**
					 * Fires inside the select input for activity filter by options.
					 *
					 * @since 1.2.0
					 */
					do_action( 'bp_activity_filter_options' ); ?>

				</select>
			</li>
		</ul>
		</div>
	</div><!-- .item-list-tabs -->

	<?php

	/**
	 * Fires before the display of the activity list.
	 *
	 * @since 1.5.0
	 */
	do_action( 'bp_before_directory_activity_list' ); ?>

	<div class="activity" aria-live="polite" aria-atomic="true" aria-relevant="all">

		<?php bp_get_template_part( 'activity/activity-loop' ); ?>

	</div><!-- .activity -->

	</div>
	<?php

	/**
	 * Fires after the display of the activity list.
	 *
	 * @since 1.5.0
	 */
	do_action( 'bp_after_directory_activity_list' ); ?>

	<?php

	/**
	 * Fires inside and displays the activity directory display content.
	 */
	do_action( 'bp_directory_activity_content' ); ?>

	<?php

	/**
	 * Fires after the activity directory display content.
	 *
	 * @since 1.2.0
	 */
	do_action( 'bp_after_directory_activity_content' ); ?>

	<?php

	/**
	 * Fires after the activity directory listing.
	 *
	 * @since 1.5.0
	 */
	do_action( 'bp_after_directory_activity' ); ?>






	</div>
</div>
