<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>


  <?php if($line->field_type != 'checkbox'): ?>
    <div class="mepr_custom_field mepr_<?php echo $line->field_key; ?> form-group">
      <!-- <label for="<?php echo $line->field_key; ?>"><?php printf( '%1$s:%2$s', _x(stripslashes($line->field_name), 'ui', 'memberpress'), $required ); ?></label> -->
      
      <?php echo MeprUsersHelper::render_custom_field($line,$value); ?>
      <span class="cc-error"><?php ($line->required) /*here for email custom fields that are not required*/ ? printf(_x('%s is Required', 'ui', 'memberpress'), stripslashes($line->field_name)) : printf(_x('%s is not valid', 'ui', 'memberpress'), stripslashes($line->field_name)); ?></span>
    </div>
  <?php endif; ?>
