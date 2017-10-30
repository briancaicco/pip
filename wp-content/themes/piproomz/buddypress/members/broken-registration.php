<?php
/**
 * Fires at the top of the BuddyPress member registration page template.
 *
 * @since 1.1.0
 */
do_action( 'bp_before_register_page' ); ?>
<script>
	// var url = document.location.href;
	// jQuery(document).ready(function() {
	// 	//copy profile name to account name during registration
	// 	if (url.indexOf("register/") >= 0) {
	// 		jQuery('label[for=field_1],#field_1').css('display','none');
	// 		jQuery('#signup_username').blur(function(){
	// 			jQuery("#field_1").val(jQuery("#signup_username").val());
	// 		});
	// 	}
	// });

	// // Google Recaptcha  function & callback
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
<div class="container mb-6">
	<div class="row el-7">
		<div class="col-12 col-lg-6 col-md-8 auth_form blue-grad pt-5 pb-4 px-md-3">
			<div class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>activity/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?><small style="vertical-align: super; font-size: 9px;"> beta</small></div>
			
			<form action="" name="signup_form" id="signup_form" class="standard-form p-4" method="post" enctype="multipart/form-data">
				
				<?php if ( 'registration-disabled' == bp_get_current_signup_step() ) : ?>
					<?php
					/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
					do_action( 'template_notices' ); 
					?>
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
					<?php
					/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
					do_action( 'template_notices' ); ?>
					<?php
					/**
					 * Fires before the display of member registration account details fields.
					 *
					 * @since 1.1.0
					 */
					do_action( 'bp_before_account_details_fields' ); 
					do_action( 'wordpress_social_login' );
					?>
					<div class="register-section" id="basic-details-section">
						<?php /***** Basic Account Details ******/ ?>
						<div class="input-group input-group-lg mt-3 py-2">
							<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
							<!-- <label for="signup_username"><?php _e( 'Username', 'buddypress' ); ?></label> -->
							<?php do_action( 'bp_signup_username_errors' ); ?>
							<input class="form-control" type="text" name="signup_username" id="signup_username" placeholder="Username" value="<?php bp_signup_username_value(); ?>" <?php bp_form_field_attributes( 'username' ); ?>/>
						</div>
						<div class="input-group input-group-lg mt-3 py-2">
							<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
							<!-- <label for="signup_email"> <?php _e( 'Email Address', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label> -->
							<?php do_action( 'bp_signup_email_errors' ); ?>
							<input class="form-control" type="email" name="signup_email" id="signup_email" placeholder="Email" value="<?php bp_signup_email_value(); ?>" <?php bp_form_field_attributes( 'email' ); ?>/>
						</div>
						<div class="input-group input-group-lg mt-3 py-2">
							<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
							<!-- <label for="signup_password"><?php _e( 'Choose a Password', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label> -->
							<?php do_action( 'bp_signup_password_errors' ); ?>
							<input class="form-control" type="password" name="signup_password" id="signup_password" value="" class="password-entry" placeholder="Password" <?php bp_form_field_attributes( 'password' ); ?>/>
							<div id="pass-strength-result"></div>
						</div>
						<div class="input-group input-group-lg mt-3 py-2">
							<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
							<!-- <label for="signup_password_confirm"><?php _e( 'Confirm Password', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label> -->
							<?php do_action( 'bp_signup_password_confirm_errors' ); ?>
							<input class="form-control" type="password" name="signup_password_confirm" id="signup_password_confirm" value="" class="password-entry-confirm" placeholder="Confirm Password" <?php bp_form_field_attributes( 'password' ); ?>/>
						</div>
						<?php do_action( 'bp_account_details_fields' ); ?>
					</div><!-- #basic-details-section -->
					<?php
					/**
					 * Fires after the display of member registration account details fields.
					 *
					 * @since 1.1.0
					 */
					do_action( 'bp_after_account_details_fields' ); ?>

					<?php
					/**
					 * Fires before the display of the registration submit buttons.
					 *
					 * @since 1.1.0
					 */
					do_action( 'bp_before_registration_submit_buttons' ); ?>
					<div class="submit pt-3 mt-3">
						<input class="btn btn-lg btn-success btn-block rounded-0 p-2 " type="submit" name="signup_submit" id="signup_submit" value="<?php esc_attr_e( 'Get Started', 'buddypress' ); ?>" />
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
				<input type="hidden" name="field_1" id="field_1" value=""  />
			</form>
<!-- 			<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
-->		</div>
		<div class="col-12 col-lg-6 col-md-4 px-0 side_panel">
			<div class="filter"></div>
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