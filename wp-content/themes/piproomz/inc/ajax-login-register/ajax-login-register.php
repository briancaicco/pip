<?php
/**
 * WordPress AJAX Login and Register without a Plugin
 * Author: Leo
 * URL: http://wpsites.org/?p=10835
 */

# 	
# 	USER REGISTRATION/LOGIN MODAL
# 	========================================================================================
#   Attach this function to the footer if the user isn't logged in
# 	========================================================================================
# 		

function pt_login_register_modal() {

		// only show the registration/login form to non-logged-in members
	if( ! is_user_logged_in() ){
		?>
		<div class="modal fade pt-user-modal" id="pt-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document" data-active-tab="">
				<div class="modal-content">

					<?php

					if( get_option('users_can_register') ){ ?>


					<!-- Register form -->
					<div class="pt-register">

						<div class="modal-header p-4">
							<h5 class="modal-title"><?php printf( __('Join %s', 'ptheme'), get_bloginfo('name') ); ?></h5>
						</div>
						<div class="modal-body p-4">

							<form id="pt_registration_form" action="<?php echo home_url( '/' ); ?>" method="POST">

								<div class="form-field">
									<label><?php _e('Username', 'ptheme'); ?></label>
									<input class="form-control input-lg required" name="pt_user_login" type="text"/>
								</div>
								<div class="form-field">
									<label for="pt_user_email"><?php _e('Email', 'ptheme'); ?></label>
									<input class="form-control input-lg required" name="pt_user_email" id="pt_user_email" type="email"/>
								</div>

								<div class="form-field">
									<input type="hidden" name="action" value="pt_register_member"/>
									<button class="btn btn-success btn-lg" data-loading-text="<?php _e('Loading...', 'ptheme') ?>" type="submit"><?php _e('Sign up', 'ptheme'); ?></button>
								</div>
								<?php wp_nonce_field( 'ajax-login-nonce', 'register-security' ); ?>
							</form>
							<div class="pt-errors"></div>
						</div>
					</div>

					<!-- Login form -->
					<div class="pt-login">
						<div class="modal-header p-4">
							<h5 class="modal-title"><?php printf( __('Login to %s', 'ptheme'), get_bloginfo('name') ); ?></h5>
						</div>
						<div class="modal-body p-4">

							<form id="pt_login_form" action="<?php echo home_url( '/' ); ?>" method="post">

								<div class="form-field">
									<label><?php _e('Username', 'ptheme') ?></label>
									<input class="form-control input-lg required" name="pt_user_login" type="text"/>
								</div>
								<div class="form-field">
									<label for="pt_user_pass"><?php _e('Password', 'ptheme')?></label>
									<input class="form-control input-lg required" name="pt_user_pass" id="pt_user_pass" type="password"/>
								</div>
								<div class="form-field">
									<input type="hidden" name="action" value="pt_login_member"/>
									<button class="btn btn-success btn-lg" data-loading-text="<?php _e('Loading...', 'ptheme') ?>" type="submit"><?php _e('Login', 'ptheme'); ?></button> <a class="alignright" href="#pt-reset-password"><?php _e('Lost Password?', 'ptheme') ?></a>
								</div>
								<?php wp_nonce_field( 'ajax-login-nonce', 'login-security' ); ?>
							</form>
							<div class="pt-errors"></div>
						</div>
					</div>

					<!-- Lost Password form -->
					<div class="pt-reset-password">

						<div class="modal-header p-4">
							<h5 class="modal-title"><?php printf( __('Reset Password', 'ptheme') ); ?></h5>
						</div>
						<div class="modal-body p-4">

							<p>Enter the username or e-mail you used in your profile. A password reset link will be sent to you by email.</p>


							<form id="pt_reset_password_form" action="<?php echo home_url( '/' ); ?>" method="post">
								<div class="form-field">
									<label for="pt_user_or_email"><?php _e('Username or E-mail', 'ptheme') ?></label>
									<input class="form-control input-lg required" name="pt_user_or_email" id="pt_user_or_email" type="text"/>
								</div>
								<div class="form-field">
									<input type="hidden" name="action" value="pt_reset_password"/>
									<button class="btn btn-success btn-lg" data-loading-text="<?php _e('Loading...', 'ptheme') ?>" type="submit"><?php _e('Get new password', 'ptheme'); ?></button>
								</div>
								<?php wp_nonce_field( 'ajax-login-nonce', 'password-security' ); ?>
							</form>
							<div class="pt-errors"></div>
						</div>

						<div class="pt-loading">
							<p><i class="fa fa-refresh fa-spin"></i><br><?php _e('Loading...', 'ptheme') ?></p>
							</div><?php

						} else {
							echo '<h3>'.__('Login access is disabled', 'ptheme').'</h3>';
						} ?>
					</div>
					<div class="modal-footer p-4 mx-auto">
						<span class="pt-register-footer"><?php _e('Don\'t have an account?', 'ptheme'); ?> <a href="#pt-register"><?php _e('Sign Up', 'ptheme'); ?></a></span>
						<span class="pt-login-footer"><?php _e('Already have an account?', 'ptheme'); ?> <a href="#pt-login"><?php _e('Login', 'ptheme'); ?></a></span>
					</div>				
				</div>
			</div>
		</div>
		<?php
	}
}
add_action('wp_footer', 'pt_login_register_modal');




# 	
# 	AJAX FUNCTION
# 	========================================================================================
#   These function handle the submitted data from the login/register modal forms
# 	========================================================================================
# 		

// LOGIN
function pt_login_member(){

  		// Get variables
	$user_login		= $_POST['pt_user_login'];	
	$user_pass		= $_POST['pt_user_pass'];


		// Check CSRF token
	if( !check_ajax_referer( 'ajax-login-nonce', 'login-security', false) ){
		echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Session token has expired, please reload the page and try again', 'ptheme').'</div>'));
	}

	 	// Check if input variables are empty
	elseif( empty($user_login) || empty($user_pass) ){
		echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Please fill all form fields', 'ptheme').'</div>'));
	 	} else { // Now we can insert this account

	 		$user = wp_signon( array('user_login' => $user_login, 'user_password' => $user_pass), false );

	 		if( is_wp_error($user) ){
	 			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.$user->get_error_message().'</div>'));
	 		} else{
	 			echo json_encode(array('error' => false, 'message'=> '<div class="alert alert-success">'.__('Login successful, reloading page...', 'ptheme').'</div>'));
	 		}
	 	}

	 	die();
	 }
	 add_action('wp_ajax_nopriv_pt_login_member', 'pt_login_member');



// REGISTER
	 function pt_register_member(){

  		// Get variables
	 	$user_login	= $_POST['pt_user_login'];	
	 	$user_email	= $_POST['pt_user_email'];

		// Check CSRF token
	 	if( !check_ajax_referer( 'ajax-login-nonce', 'register-security', false) ){
	 		echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Session token has expired, please reload the page and try again', 'ptheme').'</div>'));
	 		die();
	 	}
	 	
	 	// Check if input variables are empty
	 	elseif( empty($user_login) || empty($user_email) ){
	 		echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Please fill all form fields', 'ptheme').'</div>'));
	 		die();
	 	}

	 	$errors = register_new_user($user_login, $user_email);	

	 	if( is_wp_error($errors) ){

	 		$registration_error_messages = $errors->errors;

	 		$display_errors = '<div class="alert alert-danger">';

	 		foreach($registration_error_messages as $error){
	 			$display_errors .= '<p>'.$error[0].'</p>';
	 		}

	 		$display_errors .= '</div>';

	 		echo json_encode(array('error' => true, 'message' => $display_errors));

	 	} else {
	 		echo json_encode(array('error' => false, 'message' => '<div class="alert alert-success">'.__( 'Registration complete. Please check your e-mail.', 'ptheme').'</p>'));
	 	}


	 	die();
	 }
	 add_action('wp_ajax_nopriv_pt_register_member', 'pt_register_member');


// RESET PASSWORD
	 function pt_reset_password(){


  		// Get variables
	 	$username_or_email = $_POST['pt_user_or_email'];

		// Check CSRF token
	 	if( !check_ajax_referer( 'ajax-login-nonce', 'password-security', false) ){
	 		echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Session token has expired, please reload the page and try again', 'ptheme').'</div>'));
	 	}		

	 	// Check if input variables are empty
	 	elseif( empty($username_or_email) ){
	 		echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Please fill all form fields', 'ptheme').'</div>'));
	 	} else {

	 		$username = is_email($username_or_email) ? sanitize_email($username_or_email) : sanitize_user($username_or_email);

	 		$user_forgotten = pt_lostPassword_retrieve($username);

	 		if( is_wp_error($user_forgotten) ){

	 			$lostpass_error_messages = $user_forgotten->errors;

	 			$display_errors = '<div class="alert alert-warning">';
	 			foreach($lostpass_error_messages as $error){
	 				$display_errors .= '<p>'.$error[0].'</p>';
	 			}
	 			$display_errors .= '</div>';

	 			echo json_encode(array('error' => true, 'message' => $display_errors));
	 		}else{
	 			echo json_encode(array('error' => false, 'message' => '<p class="alert alert-success">'.__('Password Reset. Please check your email.', 'ptheme').'</p>'));
	 		}
	 	}

	 	die();
	 }	
	 add_action('wp_ajax_nopriv_pt_reset_password', 'pt_reset_password');


	 function pt_lostPassword_retrieve( $user_data ) {

	 	global $wpdb, $current_site, $wp_hasher;

	 	$errors = new WP_Error();

	 	if( empty($user_data) ){
	 		$errors->add( 'empty_username', __( 'Please enter a username or e-mail address.', 'ptheme' ) );
	 	} elseif( strpos($user_data, '@') ){
	 		$user_data = get_user_by( 'email', trim( $user_data ) );
	 		if( empty($user_data)){
	 			$errors->add( 'invalid_email', __( 'There is no user registered with that email address.', 'ptheme'  ) );
	 		}
	 	} else {
	 		$login = trim( $user_data );
	 		$user_data = get_user_by('login', $login);
	 	}

	 	if( $errors->get_error_code() ){
	 		return $errors;
	 	}

	 	if( !$user_data ){
	 		$errors->add('invalidcombo', __('Invalid username or e-mail.', 'ptheme'));
	 		return $errors;
	 	}

	 	$user_login = $user_data->user_login;
	 	$user_email = $user_data->user_email;

	 	do_action('retrieve_password', $user_login);

	 	$allow = apply_filters('allow_password_reset', true, $user_data->ID);

	 	if( !$allow ){
	 		return new WP_Error( 'no_password_reset', __( 'Password reset is not allowed for this user', 'ptheme' ) );
	 	} elseif ( is_wp_error($allow) ){
	 		return $allow;
	 	}

	 	$key = wp_generate_password(20, false);

	 	do_action('retrieve_password_key', $user_login, $key);

	 	if(empty($wp_hasher)){
	 		require_once ABSPATH.'wp-includes/class-phpass.php';
	 		$wp_hasher = new PasswordHash(8, true);
	 	}

	 	$hashed = $wp_hasher->HashPassword($key);

	 	$wpdb->update($wpdb->users, array('user_activation_key' => $hashed), array('user_login' => $user_login));

	 	$message = __('Someone requested that the password be reset for the following account:', 'ptheme' ) . "\r\n\r\n";
	 	$message .= network_home_url( '/' ) . "\r\n\r\n";
	 	$message .= sprintf( __( 'Username: %s', 'ptheme' ), $user_login ) . "\r\n\r\n";
	 	$message .= __('If this was a mistake, just ignore this email and nothing will happen.', 'ptheme' ) . "\r\n\r\n";
	 	$message .= __('To reset your password, visit the following address:', 'ptheme' ) . "\r\n\r\n";
	 	$message .= '<' . network_site_url( "wp-login.php?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . ">\r\n\r\n";

	 	if ( is_multisite() ) {
	 		$blogname = $GLOBALS['current_site']->site_name;
	 	} else {
	 		$blogname = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
	 	}

	 	$title   = sprintf( __( '[%s] Password Reset', 'ptheme' ), $blogname );
	 	$title   = apply_filters( 'retrieve_password_title', $title );
	 	$message = apply_filters( 'retrieve_password_message', $message, $key );

	 	if ( $message && ! wp_mail( $user_email, $title, $message ) ) {
	 		$errors->add( 'noemail', __( 'The e-mail could not be sent.<br />Possible reason: your host may have disabled the mail() function.', 'ptheme' ) );

	 		return $errors;

	 		wp_die();
	 	}

	 	return true;
	 }

	 function ajax_login_scripts() {

	 	wp_enqueue_style( 'user-login', get_template_directory_uri() . '/inc/ajax-login-register/user-login.css', array(), null );

	 	wp_enqueue_script( 'ajax-login-register-script', get_template_directory_uri() . '/inc/ajax-login-register/user-login.js', array( 'jquery' ), null, true );

	 	wp_localize_script('ajax-login-register-script', 'ptajax', array( 
	 		'ajaxurl' => admin_url( 'admin-ajax.php' ),
	 	));
	 }
	 add_action( 'wp_enqueue_scripts', 'ajax_login_scripts' );

/**
 * Automatically add a Login link to Primary Menu
 */
add_filter( 'wp_nav_menu_items', 'pt_login_link_to_menu', 10, 2 );
function pt_login_link_to_menu ( $items, $args ) {
	if( ! is_user_logged_in() && $args->theme_location == apply_filters('login_menu_location', 'primary') ) {
		$items .= '<li class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-login"><a href="#pt-login" class="nav-link">'.__( 'Login', 'ptheme' ).'</a></li>';
		$items .= '<li class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-register"><a href="#pt-register" class="nav-link">'.__( 'Join Now', 'ptheme' ).'</a></li>';

	}
	return $items;
}