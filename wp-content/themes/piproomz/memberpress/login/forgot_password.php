<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>

<div class="row justify-content-center">
  <div class="col-12 col-md-5 mt-3 mt-md-5">
    <div class="navbar-brand d-block text-center mb-3" >Piproomz<small style="vertical-align: super; font-size: 9px;"> beta</small></div>
    <div class="card border-0">
      <div class="card-body">

<div class="mp_wrapper">
<!--   <h4><?php _ex('Request a Password Reset', 'ui', 'memberpress'); ?></h4>
 -->  <form name="mepr_forgot_password_form" id="mepr_forgot_password_form" action="" method="post">
    <div>
      <label><?php _ex('Enter Your Username or Email Address', 'ui', 'memberpress'); ?></label>
      <input type="text" name="mepr_user_or_email" id="mepr_user_or_email" value="<?php echo isset($mepr_user_or_email)?$mepr_user_or_email:''; ?>" />
    </div>
    <div class="mp-spacer">&nbsp;</div>
    <div class="submit">
      <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-lg w-100 btn-success mepr-share-button" value="<?php _ex('Request Password Reset', 'ui', 'memberpress'); ?>" />
      <input type="hidden" name="mepr_process_forgot_password_form" value="true" />
    </div>
  </form>
</div>

</div>
</div>


<div class="mepr-login-actions mt-3 text-right d-block small">
  <a href="<?php echo home_url(); ?>/login"><?php _ex('Login', 'ui', 'memberpress'); ?></a>
</div>


</div>
</div>


