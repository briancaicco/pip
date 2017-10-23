<?php
/**
 * BuddyPress - Members Single Profile Edit
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

/**
 * Fires after the display of member profile edit content.
 *
 * @since 1.1.0
 */
do_action( 'bp_before_profile_edit_content' );

if ( bp_has_profile( 'profile_group_id=' . bp_get_current_profile_group_id() ) ) :
	while ( bp_profile_groups() ) : bp_the_profile_group(); ?>

	<div class="row">

		<div class="col">
			<?php

			/** This action is documented in bp-templates/bp-legacy/buddypress/members/single/profile/profile-wp.php */
			do_action( 'bp_before_profile_field_content' ); ?>

			<h3 class="pb-2"><?php printf( __( "Edit Profile ", 'buddypress' ), bp_get_the_profile_group_name() ); ?></h3>

			<?php if ( bp_profile_has_multiple_groups() ) : ?>
				<ul class="nav nav-tabs" aria-label="<?php esc_attr_e( 'Profile field groups', 'buddypress' ); ?>" role="navigation">

					<?php bp_profile_group_tabs(); ?>

				</ul>
			<?php endif ;?>
		</div>

	</div>

	<div class="row">
		<div class="col-lg-6 mb-7 mt-3 px-sm-4">
			<form action="<?php bp_the_profile_group_edit_form_action(); ?>" method="post" id="profile-edit-form" class="standard-form <?php bp_the_profile_group_slug(); ?>">

				<?php while ( bp_profile_fields() ) : bp_the_profile_field(); ?>
					

					<div<?php bp_field_css_class( 'editfield' ); ?>>
					<fieldset>

						<div class="input-group">
							<?php
							$field_type = bp_xprofile_create_field_type( bp_get_the_profile_field_type() );
							$field_type->edit_field_html();

							/**
							 * Fires before the display of visibility options for the field.
							 *
							 * @since 1.7.0
							 */
							do_action( 'bp_custom_profile_edit_fields_pre_visibility' );
							?>

							<div class="input-group-btn">
								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="collapse" data-target="#field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>" aria-expanded="false" aria-controls="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</button>
							</div>
						</div>
						<div class="collapse bg-light" id="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
							
							<div class="px-3 py-2">

								<?php if ( bp_current_user_can( 'bp_xprofile_change_field_visibility' ) ) : ?>
									<div class="field-visibility-settings-toggle" id="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
										<span>
											<p>Visible to: <b><?php echo  bp_get_the_profile_field_visibility_level_label();?></b></p>
											<div class="form-check form-check-inline">
												<?php bp_profile_visibility_radio_buttons() ?>
											</div>
											<button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target="#field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>" aria-expanded="false" aria-controls="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
												Save
											</button>
										</span>
									</div>

								<?php else : ?>
									<div class="field-visibility-settings-notoggle" id="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
										<p>Visible to: <b><?php echo bp_get_the_profile_field_visibility_level_label();?></b></p>
									</div>
								<?php endif; ?>
							</div>



							<?php

						/**
						 * Fires after the visibility options for a field.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_custom_profile_edit_fields' ); ?>

					</fieldset>
				</div>

			<?php endwhile; ?>

			<?php

			/** This action is documented in bp-templates/bp-legacy/buddypress/members/single/profile/profile-wp.php */
			do_action( 'bp_after_profile_field_content' ); ?>

			<div class="submit text-right">
				<input type="submit" class="btn btn-lg btn-success" name="profile-group-edit-submit" id="profile-group-edit-submit" value="<?php esc_attr_e( 'Save All Changes', 'buddypress' ); ?> " />
			</div>

			<input type="hidden" name="field_ids" id="field_ids" value="<?php bp_the_profile_field_ids(); ?>" />

			<?php wp_nonce_field( 'bp_xprofile_edit' ); ?>

		</form>
	</div>
</div>

<?php endwhile; endif; ?>

<?php

/**
 * Fires after the display of member profile edit content.
 *
 * @since 1.1.0
 */
do_action( 'bp_after_profile_edit_content' );
