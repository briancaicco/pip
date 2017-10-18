<?php

//Redirect After Registration
function bp_redirect($user) {
    $redirect_url = home_url().'/invite-success';
    bp_core_redirect($redirect_url);
}

add_action('bp_core_signup_user', 'bp_redirect', 100, 1);


?>