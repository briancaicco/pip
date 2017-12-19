<?php
/*
Plugin Name: PIP MemberPress Phonenumber Format Signup
Plugin URI: http://memberpress.com
Description: Adds some custom fields to the MemberPress signup process 
Version: 1.0.0
Author: MemberPress
Author URI: http://memberpress.com
Text Domain: memberpress
*/

require get_template_directory() . '/vendor/autoload.php';

if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');}
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

function pip_format_phone_enqueue_script() {   
    wp_enqueue_script( 'cleave', plugin_dir_url( __FILE__ ) . 'node_modules/cleave.js/dist/cleave.js' );
    wp_enqueue_script( 'cleave-phone', plugin_dir_url( __FILE__ ) . 'node_modules/cleave.js/dist/addons/cleave-phone.i18n.js' );
	wp_enqueue_script( 'init', plugin_dir_url( __FILE__ ) . 'js/init.js' );
}
add_action('wp_enqueue_scripts', 'pip_format_phone_enqueue_script');

if( is_plugin_active('memberpress/memberpress.php') ) {
	class MemberpressCustomSignup {
		public function __construct() {
			$this->load_hooks();
		}
		public function load_hooks() {
			add_action('mepr-checkout-after-email-field', array($this, 'display_signup_fields'));
			add_filter('mepr-validate-signup', array($this, 'validate_signup_form'));
		}

// This is where you put the html for the signup fields ...
// I prefer to just break out of the php block like so
		public function display_signup_fields() {
			?>
			<div class="mp-form-row mepr_phone_number">
				<div class="mp-form-label">
					<label for="phone_number"><?php _e('Mobile Phone Number:* '); ?><small>(1 555 555 5555)</small></label>
					<span class="cc-error"><?php _ex('Invalid Phone Number', 'ui', 'memberpress'); ?></span>
				</div>
				<input type="text" name="mepr_phone_number" id="phone_number" class="input-phone mepr-form-input" value="" required />
			</div>
			<?php
		}

// This get's called after the post request ...
// the $error parameter is an array ... all you have to do to throw an error is
// add an error message to the $errors array and return it like so
		public function validate_signup_form($errors) {
			if(empty($_POST['mepr_phone_number']))
				$errors = __('Invalid Phone Number');
			return $errors;
		}
	}
// Load hooks, etc.
	new MemberPressCustomSignup();
}