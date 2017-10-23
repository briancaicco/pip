<?php

// //Redirect After Registration
// function bp_redirect($user) {
//     $redirect_url = home_url().'/invite-success';
//     bp_core_redirect($redirect_url);
// }

// add_action('bp_core_signup_user', 'bp_redirect', 100, 1);

$max_in_kb = 1000;

define ( 'BP_AVATAR_THUMB_WIDTH', 80 );
define ( 'BP_AVATAR_THUMB_HEIGHT', 80 );
define ( 'BP_AVATAR_FULL_WIDTH', 320 );
define ( 'BP_AVATAR_FULL_HEIGHT', 320 );
define ( 'BP_AVATAR_ORIGINAL_MAX_WIDTH', 1100 );
define ( 'BP_AVATAR_ORIGINAL_MAX_FILESIZE', $max_in_kb );


add_filter( 'bp_is_profile_cover_image_active', '__return_true' );
add_filter( 'bp_is_groups_cover_image_active', '__return_true' );


?>