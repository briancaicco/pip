<?php
/**
 * BuddyPress - Members Register
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>
<script type="text/javascript">
	// Google Recaptcha  function & callback
	// var onSubmit = function(token) {
	// 	console.log('success!');
	// };

	// var onloadCallback = function() {
	//   grecaptcha.render('signup_submit', {
	//     'sitekey' : '6Le0JDYUAAAAAMiPzvG-Y1kBjpz4mUWCWiCXvNP_',
	//     'callback' : onSubmit
	//   });
	// };
</script>

<div id="buddypress">

	<?php

	/**
	 * Fires at the top of the BuddyPress member registration page template.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_before_register_page' ); ?>

	<div class="page" id="register-page">

		<div class="container mb-6">
			
			<div class="row el-7">
				
				<div class="col-12 col-lg-6 col-md-8 auth_form blue-grad pt-5 pb-4 px-md-3">
					
					<div class="pl-4">

						<a class="navbar-brand mb-3" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>activity/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<?php bloginfo( 'name' ); ?><small style="vertical-align: super; font-size: 9px;"> beta</small>
						</a>
						
						<?php do_action( 'wordpress_social_login' ); ?>
					
					</div>

					
					<form action="" name="signup_form" id="signup_form" class="standard-form p-4 pt-0" method="post" enctype="multipart/form-data">

						<?php if ( 'registration-disabled' == bp_get_current_signup_step() ) : ?>

						<div id="template-notices" role="alert" aria-atomic="true">
							<?php

							/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
							do_action( 'template_notices' ); ?>

						</div>

						<?php

						/**
						 * Fires before the display of the registration disabled message.
						 *
						 * @since 1.5.0
						 */
						do_action( 'bp_before_registration_disabled' ); ?>

							<p><?php _e( 'User registration is currently not allowed.', 'buddypress' ); ?></p>

						<?php

						/**
						 * Fires after the display of the registration disabled message.
						 *
						 * @since 1.5.0
						 */
						do_action( 'bp_after_registration_disabled' ); ?>
						<?php endif; // registration-disabled signup step ?>

						<?php if ( 'request-details' == bp_get_current_signup_step() ) : ?>

						<div id="template-notices" role="alert" aria-atomic="true">
							<?php

							/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
							do_action( 'template_notices' ); ?>

						</div>

<!-- 						<p><?php _e( 'Registering for this site is easy. Just fill in the fields below, and we\'ll get a new account set up for you in no time.', 'buddypress' ); ?></p>
 -->
						<?php

						/**
						 * Fires before the display of member registration account details fields.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_before_account_details_fields' ); 
						
						 ?>
						

						<style type="text/css"> #basic-details-section label{ display: none; } </style>


						<div class="register-section" id="basic-details-section">
						
						

							<?php /***** Basic Account Details ******/ ?>

							<div class="input-group input-group-lg mt-3 py-2">
							
								<label for="signup_username"><?php _e( 'Username', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
								<?php

								/**
								 * Fires and displays any member registration username errors.
								 *
								 * @since 1.1.0
								 */
								do_action( 'bp_signup_username_errors' ); ?>
								<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user-o" aria-hidden="true"></i></span>

								<input placeholder="Username" class="form-control" type="text" name="signup_username" id="signup_username" value="<?php bp_signup_username_value(); ?>" <?php bp_form_field_attributes( 'username' ); ?>/>
								
							</div>

							<div class="input-group input-group-lg mt-3 py-2">

								<label for="signup_email"><?php _e( 'Email Address', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
								<?php

								/**
								 * Fires and displays any member registration email errors.
								 *
								 * @since 1.1.0
								 */
								do_action( 'bp_signup_email_errors' ); ?>
								<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>

								<input placeholder="Email" class="form-control" type="email" name="signup_email" id="signup_email" value="<?php bp_signup_email_value(); ?>" <?php bp_form_field_attributes( 'email' ); ?>/>

							</div>

							<div class="input-group input-group-lg mt-3 py-2">

								<label for="signup_password"><?php _e( 'Choose a Password', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
								<?php

								/**
								 * Fires and displays any member registration password errors.
								 *
								 * @since 1.1.0
								 */
								do_action( 'bp_signup_password_errors' ); ?>
								<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>

								<input placeholder="Password" class="form-control password-entry" type="password" name="signup_password" id="signup_password" value="" <?php bp_form_field_attributes( 'password' ); ?>/>
								<div id="pass-strength-result"></div>

							</div>

							<div class="input-group input-group-lg mt-3 py-2">

								<label for="signup_password_confirm"><?php _e( 'Confirm Password', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
								<?php

								/**
								 * Fires and displays any member registration password confirmation errors.
								 *
								 * @since 1.1.0
								 */
								do_action( 'bp_signup_password_confirm_errors' ); ?>
								<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>

								<input placeholder="Confirm Password" class="form-control password-entry-confirm" type="password" name="signup_password_confirm" id="signup_password_confirm" value="" <?php bp_form_field_attributes( 'password' ); ?>/>

							</div>

							<?php

							/**
							 * Fires and displays any extra member registration details fields.
							 *
							 * @since 1.9.0
							 */
							do_action( 'bp_account_details_fields' ); ?>

							</div><!-- #basic-details-section -->

						
							<?php // Required for x profile fields or form won't submit ?>
							<input type="hidden" name="signup_profile_field_ids" id="signup_profile_field_ids" value="<?php bp_the_profile_field_ids(); ?>" />


						<?php

						/**
						 * Fires before the display of the registration submit buttons.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_before_registration_submit_buttons' ); ?>

						<div class="submit pt-3 mt-3">
							<input class="btn btn-lg btn-success btn-block rounded-0 p-2" type="submit" name="signup_submit" id="signup_submit" value="<?php esc_attr_e( 'Join For Free', 'buddypress' ); ?>" />
						</div>

						<?php

						/**
						 * Fires after the display of the registration submit buttons.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_after_registration_submit_buttons' ); ?>

						<?php wp_nonce_field( 'bp_new_signup' ); ?>

						<?php endif; // request-details signup step ?>

						<?php if ( 'completed-confirmation' == bp_get_current_signup_step() ) : ?>

						<div id="template-notices" role="alert" aria-atomic="true">
							<?php

							/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
							do_action( 'template_notices' ); ?>

						</div>

						<?php

						/**
						 * Fires before the display of the registration confirmed messages.
						 *
						 * @since 1.5.0
						 */
						do_action( 'bp_before_registration_confirmed' ); ?>

						<div id="template-notices" role="alert" aria-atomic="true">
							<?php if ( bp_registration_needs_activation() ) : ?>
								<p><?php _e( 'You have successfully created your account! To begin using this site you will need to activate your account via the email we have just sent to your address.', 'buddypress' ); ?></p>
							<?php else : ?>
								<p><?php _e( 'You have successfully created your account! Please log in using the username and password you have just created.', 'buddypress' ); ?></p>
							
								<a href="#" type="" class="btn btn-lg btn-success btn-block rounded-0 p-2" data-toggle="modal" data-target="#loginmodal" style="text-decoration: none !important;" >Login</a>

							<?php endif; ?>
						</div>

						<?php

						/**
						 * Fires after the display of the registration confirmed messages.
						 *
						 * @since 1.5.0
						 */
						do_action( 'bp_after_registration_confirmed' ); ?>

						<?php endif; // completed-confirmation signup step ?>

						<?php

						/**
						 * Fires and displays any custom signup steps.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_custom_signup_steps' ); ?>

					</form>
					
				</div>
			
				<div class="col-12 col-lg-6 col-md-4 px-0 side_panel">
				
					<div class="filter"></div>
				
				</div>

			</div>

		</div>
	
	</div>
	

	<?php

	/**
	 * Fires at the bottom of the BuddyPress member registration page template.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_after_register_page' ); ?>

<!-- 	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
 -->
</div><!-- #buddypress -->
