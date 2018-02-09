<?php
/**
 * Template Name: Register
 *
 *
 * @package piproomz
 */
get_header();
?>
<?php if( is_user_logged_in() ) { ?>
	<script type="text/javascript">
		window.location.href="<?php bloginfo( 'url' ); ?>/dashboard";
	</script>
<?php } ?>
<div class="container mt-3 mt-xl-5">
	<div class="row justify-content-center">
		<div class="col-sm-12 col-xl-5">
			<div class="row justify-content-center">
				<div class="col-6 text-center align-self-center mb-4 w-25">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pip_logo.svg" class="text-center align-self-center"/>
				</div>
			</div>
			<div class="row">	
				<div class="col mb-4">
					<div class="card">
						<div class="card-body">
							<h3 class="text-center font-weight-bold">Create Your Account To Get Started.</h3>
							<?php do_action( 'wordpress_social_login' ); ?>
							<div class="register-login-divider my-4"><span>or</span></div>
							<?php echo do_shortcode( '[mepr-membership-registration-form id="0" use_redirect="true"]'); ?>
							<div class="text-center register-login-switch"><p>Have an account? <a href="<?php bloginfo( 'url' ); ?>/login">Login</a></p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/node_modules/cleave.js/dist/cleave.js" /></script>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/cleave.js/dist/addons/cleave-phone.i18n.js" /></script>
<script type="text/javascript">
	var cleavePhone = new Cleave('#mepr_phone_number', {
	    phone: true,
	    phoneRegionCode: 'US'
	});
</script>
