<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>

<div class="row d-flex ">
  <div class="col-12 col-md-5 mx-auto mt-md-5">
    <div class="navbar-brand d-block text-center mb-3" >Piproomz<small style="vertical-align: super; font-size: 9px;"> beta</small></div>
    <div class="card el-7">
      <div class="card-body">

        <div class="mp_wrapper">
          <h5><b><?php _ex('Enter your new password', 'ui', 'memberpress'); ?></b></h5>
          <form name="mepr_reset_password_form" id="mepr_reset_password_form" class="mepr-form" action="" method="post">
            <div class="mp-form-row mepr_password">
              <div class="mp-form-label">
                <label><?php _ex('Password', 'ui', 'memberpress'); ?>:</label>
              </div>
              <input type="password" name="mepr_user_password" id="mepr_user_password" class="mepr-form-input mepr-forgot-password" tabindex="700" />
            </div>
            <div class="mp-form-row mepr_password_confirm">
              <div class="mp-form-label">
                <label><?php _ex('Password Confirmation', 'ui', 'memberpress'); ?>:</label>
              </div>
              <input type="password" name="mepr_user_password_confirm" id="mepr_user_password_confirm" class="mepr-form-input mepr-forgot-password-confirm" tabindex="710"/>
            </div>
            <?php MeprHooks::do_action('mepr-reset-password-after-password-fields'); ?>

            <div class="mepr_spacer">&nbsp;</div>
            <div class="submit">
              <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-lg w-100 btn-success mepr-share-button " value="<?php _ex('Update Password', 'ui', 'memberpress'); ?>" tabindex="720" />
              <input type="hidden" name="action" value="mepr_process_reset_password_form" />
              <input type="hidden" name="mepr_screenname" value="<?php echo $mepr_screenname; ?>" />
              <input type="hidden" name="mepr_key" value="<?php echo $mepr_key; ?>" />
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>
