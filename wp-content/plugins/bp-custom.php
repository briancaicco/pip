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




function pippin_add_extra_fruits($fruits) {
	// the $fruits parameter is an array of all fruits from the pippin_show_fruits() function
 
	return $fruits;
}
add_filter('pippin_add_fruits', 'pippin_add_extra_fruits');



function pip_system_messages_args() {
	// Get BuddyPress
	$bp = buddypress();
	if ( ! empty( $bp->template_message ) ) :
		$type    = ( 'success' === $bp->template_message_type ) ? 'updated' : 'error';
		$content = apply_filters( 'bp_core_render_message_content', $bp->template_message, $type ); ?>

		<div id="message" class="alert alert-dismissible fade show alert-<?php echo esc_attr( $type ); ?> el-3">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<?php echo $content; ?>

		</div>

	<?php
		do_action( 'bp_core_render_message' );
	endif;
}
function pip_remove_bp_core_render_message() {
	remove_action( 'template_notices', 'bp_core_render_message' );
	add_action( 'template_notices', 'pip_system_messages_args' );
}
add_action( 'bp_actions', 'pip_remove_bp_core_render_message', 6 );

?>