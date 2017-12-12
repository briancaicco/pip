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
			<div class="row">
				<div class="col-12 text-center mb-4">
					<span class="navbar-brand" rel="home" href="" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?><small style="vertical-align: super; font-size: 9px;"> beta</small></span>
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