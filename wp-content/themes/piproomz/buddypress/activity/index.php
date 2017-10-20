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
	<div class="row">
		<div class="col-md-8">
			<div class="card el-1">
				<?php

	/**
	 * Fires before the activity directory display content.
	 *
	 * @since 1.2.0
	 */
	do_action( 'bp_before_directory_activity_content' ); ?>

	<?php if ( is_user_logged_in() ) : ?>
		<div class="card-header p-4 bg-light">
			<?php bp_get_template_part( 'activity/post-form' ); ?>
		</div>
	<?php endif; ?>

	

	<div id="template-notices" role="alert" aria-atomic="true">
		<?php

		/**
		 * Fires towards the top of template pages for notice display.
		 *
		 * @since 1.0.0
		 */
		do_action( 'template_notices' ); ?>

	</div>

	<nav class="navbar bg-light mb-3">
		<div class="item-list-tabs activity-type-tabs" aria-label="<?php esc_attr_e( 'Sitewide activities navigation', 'buddypress' ); ?>" role="navigation">

			<ul class="nav nav-pills">
				<?php

				/**
				 * Fires before the listing of activity type tabs.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_before_activity_type_tab_all' ); ?>

				<li class="selected nav-item" id="activity-all"><a class="nav-link" href="<?php bp_activity_directory_permalink(); ?>"><?php printf( __( 'All Members %s', 'buddypress' ), '<span class="badge badge-pill badge-secondary">' . bp_get_total_member_count() . '</span>' ); ?></a></li>

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

							<li class="nav-item" id="activity-friends"><a class="nav-link" href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_friends_slug() . '/'; ?>"><?php printf( __( 'My Friends %s', 'buddypress' ), '<span class="badge badge-pill badge-secondary">' . bp_get_total_friend_count( bp_loggedin_user_id() ) . '</span>' ); ?></a></li>

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

							<li class="nav-item" id="activity-groups"><a class="nav-link" href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_groups_slug() . '/'; ?>"><?php printf( __( 'My Groups %s', 'buddypress' ), '<span class="badge badge-pill badge-secondary">' . bp_get_total_group_count_for_user( bp_loggedin_user_id() ) . '</span>' ); ?></a></li>

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

						<li class="nav-item" id="activity-favorites"><a class="nav-link" href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/favorites/'; ?>"><?php printf( __( 'My Favorites %s', 'buddypress' ), '<span class="badge badge-pill badge-secondary">' . bp_get_total_favorite_count_for_user( bp_loggedin_user_id() ) . '</span>' ); ?></a></li>

					<?php endif; ?>

					<?php if ( bp_activity_do_mentions() ) : ?>

						<?php

						/**
						 * Fires before the listing of mentions activity type tab.
						 *
						 * @since 1.2.0
						 */
						do_action( 'bp_before_activity_type_tab_mentions' ); ?>

						<li class="nav-item" id="activity-mentions"><a class="nav-link" href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/mentions/'; ?>"><?php _e( 'Mentions', 'buddypress' ); ?><?php if ( bp_get_total_mention_count_for_user( bp_loggedin_user_id() ) ) : ?> <strong><span class="badge badge-pill badge-secondary"><?php printf( _nx( '%s new', '%s new', bp_get_total_mention_count_for_user( bp_loggedin_user_id() ), 'Number of new activity mentions', 'buddypress' ), bp_get_total_mention_count_for_user( bp_loggedin_user_id() ) ); ?></span></strong><?php endif; ?></a></li>

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

		</div><!-- .item-list-tabs -->

		<div class="item-list-tabs no-ajax form-inline" id="subnav" aria-label="<?php esc_attr_e( 'Activity secondary navigation', 'buddypress' ); ?>" role="navigation">
			<ul>
				<!-- <li class="feed"><a href="<?php bp_sitewide_activity_feed_link(); ?>" class="bp-tooltip" data-bp-tooltip="<?php esc_attr_e( 'RSS Feed', 'buddypress' ); ?>" aria-label="<?php esc_attr_e( 'RSS Feed', 'buddypress' ); ?>"><?php _e( 'RSS', 'buddypress' ); ?></a></li> -->

				<?php

			/**
			 * Fires before the display of the activity syndication options.
			 *
			 * @since 1.2.0
			 */
			do_action( 'bp_activity_syndication_options' ); ?>

			<li id="activity-filter-select" class="last">
<!-- 				<label for="activity-filter-by"><?php _e( 'Show:', 'buddypress' ); ?></label>
-->				<select id="activity-filter-by" class="custom-select">
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
	</div><!-- .item-list-tabs -->
</nav>

<div class="card-body p-4">

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
</div><!-- .card-body -->
</div><!-- .card -->
</div> <!-- .col-md-8 -->
<div class="col-md-4">

	<?php 

	the_widget( 'BP_Show_Friends_Widget', '', 'before_widget=<div class="card p-2 el-1"><div class="card-body">&after_widget=</div></div>&before_title=<h4 class="card-title">&after_title=</h4>' ); ?>	

</div><!-- .col-md-8 -->
</div><!-- .row -->
</div>
