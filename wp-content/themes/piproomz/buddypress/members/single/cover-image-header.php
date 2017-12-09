<?php
/**
 * BuddyPress - Users Cover Image Header
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

<?php

/**
 * Fires before the display of a member's header.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_member_header' ); ?>

<div id="cover-image-container" id="content">
	
	<a id="header-cover-image" href="<?php bp_displayed_user_link(); ?>"></a>

	<div id="item-header-cover-image">

		<div class="container">
			<div class="row">	

				<div class="col-12 col-sm-6 col-md-4 p-0 mx-auto mx-sm-0 text-left " id="item-header-avatar">

					<a href="<?php bp_displayed_user_link(); ?>">

						<?php bp_displayed_user_avatar( 'type=50&class=img-fluid' ); ?>

					</a>
				</div><!-- #item-header-avatar -->

				<div class="col-12 col-sm-6 mt-sm-5 col-md-8 mx-auto mt-md-6 bg-light mw-100 py-3 pl-sm-3 text-center text-sm-left" id="item-header-content">

					<div class="float-md-left">
						<h2 class="user-nicename mb-0 text-capitalize"><?php echo bp_get_user_firstname();?></h2>
					</div> 
					<div class="float-md-right">
						<?php get_user_badge(); ?>
							
					</div>
					<div class="clearfix">
						
					</div>

					<div id="item-buttons">
						<p class="pt-0"><span class="activity mb-0" data-livestamp="<?php bp_core_iso8601_date( bp_get_user_last_activity( bp_displayed_user_id() ) ); ?>"><?php bp_last_activity( bp_displayed_user_id() ); ?></span></p>

						<?php do_action( 'bp_member_header_actions' ); ?>
				
					</div><!-- #item-buttons -->

				</div><!-- #item-header-content -->
			</div>
		</div>
	</div><!-- #item-header-cover-image -->
</div><!-- #cover-image-container -->

<?php

/**
 * Fires after the display of a member's header.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_member_header' ); ?>

<?php

/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
do_action( 'template_notices' ); ?>

