<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>
<div class="mp_wrapper">
	<form class="mepr-signup-form mepr-form" method="post" action="<?php echo $_SERVER['REQUEST_URI'].'#mepr_errors'; ?>" novalidate>
		<input type="hidden" id="mepr_process_signup_form" name="mepr_process_signup_form" value="Y" />
		<input type="hidden" id="mepr_product_id" name="mepr_product_id" value="<?php echo $product->ID; ?>" />

		<?php if(MeprUtils::is_user_logged_in()): ?>
			<input type="hidden" name="logged_in_purchase" value="1" />
		<?php endif; ?>

		<?php if( ($product->register_price_action != 'hidden') && MeprHooks::apply_filters('mepr_checkout_show_terms',true) ): ?>
			<?php if(!is_page( 'register' )){ ?>
			<div class="mepr_bold mepr_price mb-3">
				<?php $price_label = ($product->is_one_time_payment() ? _x('Price:', 'ui', 'memberpress') : _x('Payment:', 'ui', 'memberpress')); ?>
				<label><?php echo $price_label; ?></label>
				<div class="mepr_price_cell">
					<?php MeprProductsHelper::display_invoice( $product, $mepr_coupon_code ); ?>
				</div>
			</div>
			<?php } ?>
		<?php endif; ?>

		<?php MeprHooks::do_action('mepr-checkout-before-name', $product->ID); ?>

		<?php if((!MeprUtils::is_user_logged_in() ||
			(MeprUtils::is_user_logged_in() && $mepr_options->show_fields_logged_in_purchases)) &&
			$mepr_options->show_fname_lname): ?>

			<div class="form-inline">
				<div class="mepr_first_name form-group">
					<!-- <label><?php _ex('First Name', 'ui', 'memberpress'); echo ($mepr_options->require_fname_lname)?'*':''; ?></label> -->
					<input type="text" placeholder="<?php _ex('First name', 'ui', 'memberpress'); ?>" name="user_first_name" id="user_first_name" class="mepr-form-input form-control-lg w-100 form-control mb-4 mr-1 " value="<?php echo $first_name_value; ?>" <?php echo ($mepr_options->require_fname_lname)?'required':''; ?> required />
					<span class="cc-error"><?php _ex('Field cannot be empty', 'ui', 'memberpress'); ?></span>
				</div>

				<div class="mepr_last_name form-group">
					<!-- <label><?php _ex('Last Name', 'ui', 'memberpress'); echo ($mepr_options->require_fname_lname)?'*':''; ?></label> -->
					<input type="text" placeholder="<?php _ex('Last name', 'ui', 'memberpress'); ?>" name="user_last_name" id="user_last_name" class="mepr-form-input form-control-lg w-100 form-control mb-4 ml-1 " value="<?php echo $last_name_value; ?>" <?php echo ($mepr_options->require_fname_lname)?'required':''; ?> required />
					<span class="cc-error"><?php _ex('Field cannot be empty', 'ui', 'memberpress'); ?></span>
				</div>
			</div>
			<?php if(!is_page( 'register' )){ ?>
				<div class="mepr_phone form-group">
					<!-- <label><?php _ex('Phone Number:', 'ui', 'memberpress'); echo ($mepr_options->require_fname_lname)?'*':''; ?></label> -->
					<input type="text" placeholder="Phone (+1-555-555-5555)" name="mepr_phone" id="mepr_phone" class="mepr-form-input form-control-lg form-control mb-3" value="" required />
					<span class="cc-error"><?php _ex('Field cannot be empty', 'ui', 'memberpress'); ?></span>
				</div>
			<?php } ?>

		<?php else: /* this is here to avoid validation issues */ ?>
			<input type="hidden" name="user_first_name" id="user_first_name" value="<?php echo $first_name_value; ?>" />
			<input type="hidden" name="user_last_name" id="user_last_name" value="<?php echo $last_name_value; ?>" />
		<?php endif; ?>

		<?php

		// if(MeprUtils::is_user_logged_in() && $mepr_options->show_fields_logged_in_purchases) {
		// 	MeprUsersHelper::render_custom_fields($product);
		// } elseif(!MeprUtils::is_user_logged_in()) { // We only pass the 'signup' flag on initial Signup
		// 	MeprUsersHelper::render_custom_fields($product, true);
		// } 

		?>



<?php if(MeprUtils::is_user_logged_in()): ?>
	<input type="hidden" name="user_email" id="user_email" value="<?php echo stripslashes($mepr_current_user->user_email); ?>" />
<?php else: ?>
	<input type="hidden" class="mepr-geo-country" name="mepr-geo-country" value="" />

	<?php if(!$mepr_options->username_is_email): ?>

			<div class="mepr_username form-group">
				<!-- <label><?php _ex('Username:*', 'ui', 'memberpress'); ?></label> -->
				<input type="text" placeholder="Username" name="user_login" id="user_login" class="mepr-form-input form-control-lg form-control mb-3" value="<?php echo (isset($user_login))?esc_attr(stripslashes($user_login)):''; ?>" required />
				<span class="cc-error"><?php _ex('Invalid Username', 'ui', 'memberpress'); ?></span>
			</div>

	<?php endif; ?>
	<div class="mepr_email">
		<div class="mepr_email form-group">
			<!-- <label><?php _ex('Email:*', 'ui', 'memberpress'); ?></label> -->
			<input type="email" placeholder="Email address" name="user_email" id="user_email" class="mepr-form-input form-control-lg form-control mb-3" value="<?php echo (isset($user_email))?esc_attr(stripslashes($user_email)):''; ?>" required />
			<span class="cc-error"><?php _ex('Invalid Email', 'ui', 'memberpress'); ?></span>
		</div>
	</div>
	<?php MeprHooks::do_action('mepr-after-email-field'); //Deprecated ?>
	<?php MeprHooks::do_action('mepr-checkout-after-email-field', $product->ID); ?>
		<div class="mepr_password form-group">
			<!-- <label><?php _ex('Password:*', 'ui', 'memberpress'); ?></label> -->
			<input type="password" placeholder="Password" name="mepr_user_password" id="mepr_user_password" class="mepr-form-input mepr-password form-control-lg form-control mb-3" value="<?php echo (isset($mepr_user_password))?esc_attr(stripslashes($mepr_user_password)):''; ?>" required />
			<span class="cc-error"><?php _ex('Invalid Password', 'ui', 'memberpress'); ?></span>
		</div>

		<div class="mepr_password_confirm form-group">
			<!-- <label><?php _ex('Password Confirmation:*', 'ui', 'memberpress'); ?></label> -->
			<input type="password" placeholder="Password confirm " name="mepr_user_password_confirm" id="mepr_user_password_confirm" class="mepr-form-input mepr-password-confirm form-control-lg form-control mb-3" value="<?php echo (isset($mepr_user_password_confirm))?esc_attr(stripslashes($mepr_user_password_confirm)):''; ?>" required />
			<span class="cc-error"><?php _ex('Password Confirmation Doesn\'t Match', 'ui', 'memberpress'); ?></span>
		</div>

	<?php MeprHooks::do_action('mepr-after-password-fields'); //Deprecated ?>
	<?php MeprHooks::do_action('mepr-checkout-after-password-fields', $product->ID); ?>
<?php endif; ?>

<?php MeprHooks::do_action('mepr-before-coupon-field'); //Deprecated ?>
<?php MeprHooks::do_action('mepr-checkout-before-coupon-field', $product->ID); ?>

<?php if($product->adjusted_price() > 0.00): ?>
	<?php if($mepr_options->coupon_field_enabled): ?>

			<div class="mepr_coupon form-group">
				<!-- <label><?php _ex('Coupon Code:', 'ui', 'memberpress'); ?></label> -->
				<input type="text" placeholder="Coupon code" id="mepr_coupon_code-<?php echo $product->ID; ?>" class="mepr-form-input form-control-lg form-control mepr-coupon-code" name="mepr_coupon_code" value="<?php echo (isset($mepr_coupon_code))?esc_attr(stripslashes($mepr_coupon_code)):''; ?>" data-prd-id="<?php echo $product->ID; ?>" />
				<span class="mepr-coupon-loader mepr-hidden">
					<img src="<?php echo includes_url('js/thickbox/loadingAnimation.gif'); ?>" width="100" height="10" />
				</span>
				<span class="cc-error"><?php _ex('Invalid Coupon', 'ui', 'memberpress'); ?></span>
			</div>

	<?php else: ?>
		<input type="hidden" id="mepr_coupon_code-<?php echo $product->ID; ?>" name="mepr_coupon_code" value="<?php echo (isset($mepr_coupon_code))?esc_attr(stripslashes($mepr_coupon_code)):''; ?>" />
	<?php endif; ?>
	<?php $active_pms = $product->payment_methods(); ?>
	<?php $pms = $product->payment_methods(); ?>
	<div class="mepr_payment_method">
		<?php echo MeprOptionsHelper::payment_methods_dropdown('mepr_payment_method', $active_pms); ?>
	</div>
<?php endif; ?>

<?php if(!MeprUtils::is_user_logged_in()): ?>
	<?php if($mepr_options->require_tos): ?>
<!-- 		<div class="mepr_tos form-check">
			<label for="mepr_agree_to_tos" class="mepr-checkbox-field mepr-form-input form-control-lg form-check-label" required>
				<input type="checkbox" name="mepr_agree_to_tos" id="mepr_agree_to_tos " class="form-check-input"> <?php checked(isset($mepr_agree_to_tos)); ?>
				<a href="<?php echo stripslashes($mepr_options->tos_url); ?>" target="_blank"><?php echo stripslashes($mepr_options->tos_title); ?></a>*
			</label>
		</div> -->
	<?php endif; ?>

	<div class="text-center register-accept-tos">
		<p>By signing up, I agree to Piproomz's <br/>
		<a href="<?php bloginfo( 'url' ); ?>/terms-of-use">Terms of Service</a> and <a href="<?php bloginfo( 'url' ); ?>/privacy-policy">Privacy Policy</a>.</p>
	</div>

	<?php // This thing needs to be hidden in order for this to work so we do it explicitly as a style ?>
	<input type="text" placeholder="" id="mepr_no_val" name="mepr_no_val" class="mepr-form-input form-control-lg form-control mb-3" autocomplete="off" />
<?php endif; ?>

<?php MeprHooks::do_action('mepr-user-signup-fields'); //Deprecated ?>
<?php MeprHooks::do_action('mepr-checkout-before-submit', $product->ID); ?>

	<input type="submit" class="btn btn-success <?php if(is_page( 'register' )){ ?>btn-block<?php } ?> mepr-submit" value="<?php echo stripslashes($product->signup_button_text); ?>" />
	
	<?php if(is_page( 'register' )){ ?><input type="hidden" name="redirect_to" value="<?php bloginfo( 'url' ); ?>/dashboard" /><?php } ?>


	<div class="text-center mt-4">
		<?php MeprView::render('/shared/has_errors', get_defined_vars()); ?>
	</div>
</form>
</div>

