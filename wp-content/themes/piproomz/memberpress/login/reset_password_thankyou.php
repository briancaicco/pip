<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>


<div class="row d-flex ">
  <div class="col-12 col-md-5 mx-auto mt-md-5">
    <div class="navbar-brand d-block text-center mb-3" >Piproomz<small style="vertical-align: super; font-size: 9px;"> beta</small></div>
    <div class="card el-7">
      <div class="card-body">

		<h5><b><?php _ex('Password successfully reset', 'ui', 'memberpress'); ?></b></h5>
		<p><?php _ex('Your password has been reset and an email has also been sent notifying you of the change. Be sure to write your new password down and store it somewhere safe.', 'ui', 'memberpress'); ?></p>

		<a class="btn btn-lg w-100 btn-success mt-2" href="<?php echo home_url(); ?>/login"><?php _ex('Login', 'ui', 'memberpress'); ?></a>

      </div>
    </div>
  </div>
</div>