<?php
/**
 * BuddyPress - Groups Activity
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>
<div class="item-list-tabs nav-justified no-ajax" id="subnav" aria-label="<?php esc_attr_e( 'Group secondary navigation', 'buddypress' ); ?>" role="navigation">
	<ul>
		<?php

		/**
		 * Fires inside the syndication options list, after the RSS option.
		 *
		 * @since 1.2.0
		 */
		do_action( 'bp_group_activity_syndication_options' ); ?>

		<li id="activity-filter-select" class="last mb-3">
			<select id="activity-filter-by" class="custom-select">
				<option value="-1"><?php _e( '&mdash; Everything &mdash;', 'buddypress' ); ?></option>

				<?php bp_activity_show_filters( 'group' ); ?>

				<?php

				/**
				 * Fires inside the select input for group activity filter options.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_group_activity_filter_options' ); ?>
			</select>
		</li>
	</ul>
</div><!-- .item-list-tabs -->

<?php

/**
 * Fires before the display of the group activity post form.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_group_activity_post_form' ); ?>

<?php if ( is_user_logged_in() && bp_group_is_member() ) : ?>

	<?php bp_get_template_part( 'activity/post-form' ); ?>

<?php endif; ?>

<?php

/**
 * Fires after the display of the group activity post form.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_group_activity_post_form' ); ?>
<?php

/**
 * Fires before the display of the group activities list.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_group_activity_content' ); ?>

<div class="activity single-group" aria-live="polite" aria-atomic="true" aria-relevant="all">

	<?php bp_get_template_part( 'activity/activity-loop' ); ?>

</div><!-- .activity.single-group -->

<?php

/**
 * Fires after the display of the group activities list.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_group_activity_content' );
