<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>

<div class="mp_wrapper mp_login_form">
	<?php if(MeprUtils::is_user_logged_in()): ?>

		<?php if(!isset($_GET['mepr-unauth-page']) && (!isset($_GET['action']) || $_GET['action'] != 'mepr_unauthorized')): ?>
			<?php if(is_page($login_page_id) && isset($redirect_to) && !empty($redirect_to)): ?>
				<script type="text/javascript">
					window.location.href="<?php echo $redirect_to; ?>";
				</script>
			<?php else: ?>
				<div class="mepr-already-logged-in">
					<?php printf(_x('You\'re already logged in. %1$sLogout.%2$s', 'ui', 'memberpress'), '<a href="'. wp_logout_url($redirect_to) . '">', '</a>'); ?>
				</div>
			<?php endif; ?>
		<?php else: ?>
			<?php echo $message; ?>
		<?php endif; ?>

	<?php else: ?>
		<?php echo $message; ?>

		<!-- mp-login-form-start --> <?php //DON'T GET RID OF THIS HTML COMMENT PLEASE IT'S USEFUL FOR SOME REGEX WE'RE DOING ?>

		<form name="mepr_loginform" id="mepr_loginform" class="standard-form pt-0 pb-4" action="<?php echo $login_url; ?>" method="post">
			<div class="form-group mt-3 py-2">
				<input type="text" name="log" id="user_login" class="input form-control-lg" value="<?php echo (isset($_POST['log'])?$_POST['log']:''); ?>" placeholder="Username or E-mail" />
			</div>
			<div class="form-group mt-3 py-2">
				<input type="password" name="pwd" id="user_pass" class="input form-control-lg" value="<?php echo (isset($_POST['pwd'])?$_POST['pwd']:''); ?>" placeholder="Password" />
			</div>
			<div class="form-group border-0 mt-2 py-2">
				<button type="checkbox" class="btn btn-sm btn-switch float-left" name="rememberme" data-toggle="button" value="forever" aria-pressed="false" autocomplete="off">
					<div class="handle"></div>
				</button>
				<div class="">Remember Me</div>
			</div>
			<div class="submit pt-3">
				<input type="submit" name="wp-submit" id="submit" class="btn btn-lg btn-success btn-block rounded-0 p-2" value="Login" />
				<input type="hidden" name="redirect_to" value="<?php echo esc_html($redirect_to); ?>" />
				<input type="hidden" name="mepr_process_login_form" value="true" />
				<input type="hidden" name="mepr_is_login_page" value="<?php echo ($is_login_page)?'true':'false'; ?>" />
			</div>
		</form>

		<div class="mepr-login-actions pt-0 pb-4">
			<a href="<?php echo $forgot_password_url; ?>"><?php _ex('Forgot Password?', 'ui', 'memberpress'); ?></a>
		</div>
		<!-- mp-login-form-end --> <?php //DON'T GET RID OF THIS HTML COMMENT PLEASE IT'S USEFUL FOR SOME REGEX WE'RE DOING ?>

	<?php endif; ?>
</div>