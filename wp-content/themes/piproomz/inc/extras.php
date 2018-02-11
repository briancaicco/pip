<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package piproomz
 */

if ( ! function_exists( 'understrap_body_classes' ) ) {
	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 *
	 * @return array
	 */
	function understrap_body_classes( $classes ) {
		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}
		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}
}
add_filter( 'body_class', 'understrap_body_classes' );

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.
add_filter( 'body_class', 'adjust_body_class' );

if ( ! function_exists( 'adjust_body_class' ) ) {
	/**
	 * Setup body classes.
	 *
	 * @param string $classes CSS classes.
	 *
	 * @return mixed
	 */
	function adjust_body_class( $classes ) {

		foreach ( $classes as $key => $value ) {
			if ( 'tag' == $value ) {
				unset( $classes[ $key ] );
			}
		}

		return $classes;

	}
}

// Filter custom logo with correct classes.
add_filter( 'get_custom_logo', 'change_logo_class' );

if ( ! function_exists( 'change_logo_class' ) ) {
	/**
	 * Replaces logo CSS class.
	 *
	 * @param string $html Markup.
	 *
	 * @return mixed
	 */
	function change_logo_class( $html ) {

		$html = str_replace( 'class="custom-logo"', 'class="img-fluid"', $html );
		$html = str_replace( 'class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html );
		$html = str_replace( 'alt=""', 'title="Home" alt="logo"' , $html );

		return $html;
	}
}

/**
 * Display navigation to next/previous post when applicable.
 */
if ( ! function_exists( 'understrap_post_nav' ) ) :

	function understrap_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
		<nav class="container navigation post-navigation">
			<h2 class="sr-only"><?php _e( 'Post navigation', 'understrap' ); ?></h2>
			<div class="row nav-links justify-content-between">
				<?php

				if ( get_previous_post_link() ) {
					previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'understrap' ) );
				}
				if ( get_next_post_link() ) {
					next_post_link( '<span class="nav-next">%link</span>',     _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'understrap' ) );
				}
				?>
			</div><!-- .nav-links -->
		</nav><!-- .navigation -->

		<?php
	}
endif;



	// Allow SVG Upload
	//////////////////////////////////////////////////////////////////////
function cc_mime_types($mimes) {
	$mimes["svg"] = "image/svg+xml";
	return $mimes;
}
add_filter("upload_mimes", "cc_mime_types");


	// Remove Auto-Complete from login page password field
	//////////////////////////////////////////////////////////////////////
add_action('login_init', 'acme_autocomplete_login_init');
function acme_autocomplete_login_init()
{
	ob_start();
}

add_action('login_form', 'acme_autocomplete_login_form');
function acme_autocomplete_login_form()
{
	$content = ob_get_contents();
	ob_end_clean();
	$content = str_replace('id="user_pass"', 'id="user_pass" autocomplete="off"', $content);
	echo $content;
}


	// Remove CSS version Parameter (messes with cacheing in chrome)
	//////////////////////////////////////////////////////////////////////
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );



	// Buddypress global notifications
	//////////////////////////////////////////////////////////////////////

function bp_get_notifcation_count( ) {

		//do not change if the user is not logged in
	if( ! is_user_logged_in() ) 
		return;

		$user_id = get_current_user_id();//logged in user's id
		
		$count = bp_notifications_get_unread_notification_count( $user_id );


		if( $count > 0 ) {

			$count = sprintf( "<span class='badge badge-danger'>%d</span>", $count );

			return $count;

		} else {};
		
	}



	// User  Nav Edits
	//////////////////////////////////////////////////////////////////////

	function bpcodex_rename_profile_tabs() {

	      //buddypress()->members->nav->edit_nav( array( 'name' => __( 'My Buddy Forums', 'textdomain' ) ), 'forums' );
		buddypress()->members->nav->edit_nav( array( 'name' => __( 'Rooms', 'textdomain' ) ), 'groups' );

	}
	add_action( 'bp_actions', 'bpcodex_rename_profile_tabs' );


	function bpcodex_rename_group_tabs() {

		if ( ! bp_is_group() ) {
			return;
		}

		//buddypress()->groups->nav->edit_nav( array( 'name' => __( 'Room Discussion', 'buddypress' ) ), 'forum', bp_current_item() );
	}
	add_action( 'bp_actions', 'bpcodex_rename_group_tabs' );



	function pip_edit_profile_nav_items() {

		$bp = buddypress();

		foreach ( $bp->members->nav->get_primary() as $user_nav_item ) {
			if ( empty( $user_nav_item->show_for_displayed_user ) && ! bp_is_my_profile() ) {
				continue;
			}

			$selected = '';
			if ( bp_is_current_component( $user_nav_item->slug ) ) {
				$selected = ' class="current selected active"';
			}

			if ( bp_loggedin_user_domain() ) {
				$link = str_replace( bp_loggedin_user_domain(), bp_displayed_user_domain(), $user_nav_item->link );
			} else {
				$link = trailingslashit( bp_displayed_user_domain() . $user_nav_item->link );
			}

			echo apply_filters_ref_array( 'bp_get_displayed_user_nav_' . $user_nav_item->css_id, array( '<a class="btn btn-secondary br-0 w-100 py-3 mt-0 small" id="' . $user_nav_item->css_id . '-personal-li" ' . $selected . ' user-' . $user_nav_item->css_id . '" href="' . $link . '">' . $user_nav_item->name . '</a></button>', &$user_nav_item ) );
		}

	}




	// Setup Cover Images
	//////////////////////////////////////////////////////////////////////	


	function pip_theme_cover_image_callback( $params = array() ) {
		if ( empty( $params ) ) {
			return;
		}

		return '
		/* Cover image - Do not forget this part */
	        #buddypress #header-cover-image {
		height: ' . $params["height"] . 'px;
		background-image: url(' . $params['cover_image'] . ');
	}
	';
}


function pip_theme_cover_image_css( $settings = array() ) {
	    /**
	     * If you are using a child theme, use bp-child-css
	     * as the theme handel
	     */
	    $theme_handle = 'bp-parent-css';

	    $settings['theme_handle'] = $theme_handle;
	    $settings['width']  = 1170;
	    $settings['height'] = 250;
	    /**
	     * Then you'll probably also need to use your own callback function
	     * @see the previous snippet
	     */
	    $settings['callback'] = 'pip_theme_cover_image_callback';

	    return $settings;
	}
	add_filter( 'bp_before_xprofile_cover_image_settings_parse_args', 'pip_theme_cover_image_css', 10, 1 );
	add_filter( 'bp_before_groups_cover_image_settings_parse_args', 'pip_theme_cover_image_css', 10, 1 );




	// Set avatar upload size to 1mb
	//////////////////////////////////////////////////////////////////////
	add_filter( 'bp_core_avatar_original_max_filesize', function() {
	    return 1120000; // 5mb
	} );



	// Disable activation and all activation emails. 
	//////////////////////////////////////////////////////////////////////
	// Change the text on the signup page
	add_filter( 'bp_registration_needs_activation', '__return_false' );

	function disable_validation( $user_id ) {
		global $wpdb;
		$wpdb->query( $wpdb->prepare( "UPDATE $wpdb->users SET user_status = 0 WHERE ID = %d", $user_id ) );
	}

	add_action( 'bp_core_signup_user', 'disable_validation' );
	
	function fix_signup_form_validation_text() {
		return false;
	}
	
	add_filter( 'bp_registration_needs_activation', 'fix_signup_form_validation_text' );


	// Hide the wordpress toolbar for all users
	//////////////////////////////////////////////////////////////////////
	show_admin_bar(false);



	use Twilio\Rest\Client;

	// Signals post type functions
	//////////////////////////////////////////////////////////////////////

	function pip_signals_post_publish( $post_id ) {
		
	// Auto Generate Title and Slug for Signals

		$signal_post = array();
		$signal_post['ID'] = $post_id;

		$post_type = get_post_type( $signal_post );
		
		if ($post_type = 'signal') {

			$currency_pair = get_field('currency_pair');

			$signal_post['post_title'] = $currency_pair;
			$signal_post['post_name'] = sanitize_title( $currency_pair );

	// Update the post into the database
			wp_update_post( $signal_post );

	// WP_User_Query arguments
			$args = array(
				'role' => 'pro_member'
			);

	// The User Query
		// Check for query transient in database
		if ( false === ( $wp_user_query = get_transient( 'pip_query_users' ) ) ) {
				
			$wp_user_query = new WP_User_Query( $args );

			$members = $wp_user_query->get_results();

			// Save query results to database as transient
			set_transient( 'pip_query_users', $wp_user_query, 4 * HOUR_IN_SECONDS );
		}
			$signal_pair = get_field('currency_pair', $post_id);
			$signal_url = get_the_permalink( $post_id );

			$i = 0;

	// Build Array of User Numbers
			foreach ($members as $member) {
				$user_id = $member->ID;
				$user_info = get_userdata( $user_id );
				$user_phone = $user_info->mepr_phone;
	// Loop through users and all their numbers to the array using a counter.
				$memberNumbers[$i] = $user_phone;
				$i++;
			}

			foreach ($memberNumbers as $memberNumber) {

				$twilioArgs = array( 
					'number_to' => $memberNumber,
					'message' => "Hey! New signal from piproomz.com for: $signal_pair. Check it out! $signal_url "
				); 
				twl_send_sms( $twilioArgs );

			}

		}


	}

	// run after ACF saves the $_POST['fields'] data
	add_action('acf/save_post', 'pip_signals_post_publish', 10, 1);



//add page slug to body class, if on a page
//////////////////////////////////////////////////////////////////////

	add_filter('body_class','smartestb_pages_bodyclass');
	function smartestb_pages_bodyclass($classes) {
		if (is_page()) {
        // get page slug
			global $post;
			$slug = get_post( $post )->post_name;

        // add slug to $classes array
			$classes[] = $slug;
        // return the $classes array
			return $classes;
		} else { 
			return $classes;
		}
	}


// User Badges
//////////////////////////////////////////////////////////////////////


	function get_user_badge() {
		$user_id = bp_displayed_user_id();

			// Check for query transient in database
		if ( false === ( $user = get_transient( 'pip_query_users_id' ) ) ) {	
			
			$user = new WP_User( $user_id );
			
			// Save query results to database as transient
			set_transient( 'pip_query_users_id', $user, 12 * HOUR_IN_SECONDS );
		}

		if ( ! empty( $user->roles ) && is_array( $user->roles ) && in_array( 'pro_member', $user->roles ) ) {
			echo '<div class="badge badge-success text-white member-lvl">Pro</div>';
		} elseif ( ! empty( $user->roles ) && is_array( $user->roles ) && in_array( 'basic_member', $user->roles ) ){
			echo '<div class="badge badge-warning text-white member-lvl">Basic</div>';
		}
	}

// User Badges
//////////////////////////////////////////////////////////////////////

	function get_activity_avatar_user_badge() {
		
		$user_id = bp_get_activity_user_id();

					// Check for query transient in database
		if ( false === ( $user = get_transient( 'pip_query_users_id_2' ) ) ) {	
			
			$user = new WP_User( $user_id );
			
			// Save query results to database as transient
			set_transient( 'pip_query_users_id_2', $user, 12 * HOUR_IN_SECONDS );
		}

		if ( ! empty( $user->roles ) && is_array( $user->roles ) && in_array( 'pro_member', $user->roles ) ) {
			echo 'avatar_pro_member_ring';
		} elseif ( ! empty( $user->roles ) && is_array( $user->roles ) && in_array( 'basic_member', $user->roles ) ){
			echo 'avatar_basic_member_ring';
		}
	}




///////////////////// Add all Currencies Dynamically to ACF /////////////////////

	function pip_load_currency_select_field_choices( $field ) {

		$field['choices'] = array();

		$all_currencies = get_posts(array(
			'posts_per_page'    =>  -1,
			'post_type'         =>  'currency',
			'post_status'       =>  'publish'
		));

		if( is_array($all_currencies) ) {
			foreach( $all_currencies as $currency_pair ) {
				$field['choices'][ $currency_pair->post_title ] = $currency_pair->post_title;
			}
		}

    // return the field
		return $field;

	}
	add_filter('acf/load_field/name=currency_pair', 'pip_load_currency_select_field_choices');



///////////////////// Roomz -> get room members from room ID /////////////////////
	function pip_roomz_get_group_members($group_id){
		global $wpdb;

		if ($group_id != 0 ) {

		// Check for query transient in database
		if ( false === ( $group_members = get_transient( 'group_members' ) ) ) {

					$group_members = $wpdb->get_results( 
						"
						SELECT group_id, user_id 
						FROM wp_bp_groups_members
						WHERE group_id = $group_id
						"
					);
			// Save query results to database as transient
			set_transient( 'group_members', $group_members, 12 * HOUR_IN_SECONDS );
		}

		// Loop through query results
		if ($group_members != 0) {
				foreach ( $group_members as $group_member ){

					$user_info = get_userdata( $group_member->user_id );
					echo $user_info->user_login;
					$user_avatar = apply_filters( 'bp_group_request_user_avatar_thumb', bp_core_fetch_avatar( array( 'item_id' => $group_member->user_id, 'type' => 'thumb' ) ) );
					echo $user_avatar;
					echo "<br/>";

				}
			}
		}

	}



///////////////////// Return Ifly Chat foreach group name /////////////////////
	function pip_get_ifly_chat_rooms( $groupName ){ 


		if( $groupName == 'XPTUSD') : $chatRoomId = '1';
		elseif( $groupName == 'NZDUSD') : $chatRoomId = '2';
		elseif( $groupName == 'XRPUSD') : $chatRoomId = '3';
		elseif( $groupName == 'GBPNZD') : $chatRoomId = '4';
		elseif( $groupName == 'CHFJPY') : $chatRoomId = '5';
		elseif( $groupName == 'EURGBP') : $chatRoomId = '6';
		elseif( $groupName == 'GBPCHF') : $chatRoomId = '7';
		elseif( $groupName == 'GBPCAD') : $chatRoomId = '8';
		elseif( $groupName == 'USDCAD') : $chatRoomId = '9';
		elseif( $groupName == 'EURAUD') : $chatRoomId = '10';
		elseif( $groupName == 'NZDJPY') : $chatRoomId = '11';
		elseif( $groupName == 'GOLD')   : $chatRoomId = '12';
		elseif( $groupName == 'EURNZD') : $chatRoomId = '13';
		elseif( $groupName == 'EURJPY') : $chatRoomId = '14';
		elseif( $groupName == 'AUDUSD') : $chatRoomId = '15';
		elseif( $groupName == 'BTCUSD') : $chatRoomId = '16';
		elseif( $groupName == 'GBPJPY') : $chatRoomId = '17';
		elseif( $groupName == 'GBPUSD') : $chatRoomId = '18';
		elseif( $groupName == 'EURTRY') : $chatRoomId = '19';
		elseif( $groupName == 'EURUSD') : $chatRoomId = '20';
		elseif( $groupName == 'ETHUSD') : $chatRoomId = '21';
		elseif( $groupName == 'USDJPY') : $chatRoomId = '22';
		else: $chatRoomId = '0';
		endif;

	//echo '<div data-room-id=' . $chatRoomId . ' data-height="100%" data-width="100%" class="iflychat-embed"></div>';
	//$url = site_url();
	//echo '<iframe class="ifly-frame" src="'. $url . '/ifly-chat-frame?room_id=' . $chatRoomId . '" ></iframe>';
	echo '<div data-room-id="'. $chatRoomId . '" data-height="600px" data-width="100%" class="iflychat-embed"></div>';

}

///////////////////// Roomz filter function /////////////////////
	function pip_roomz_filter_function(){ 

		$show_currencies = $_POST['currency'];

		if( isset( $_POST['currency'] ) ){
			$args = array(
				'post_type' => 'currency',
				'post__in' => $show_currencies,
			);
		} else{

			return;
		}

		$roomz = get_posts( $args );
			
		if ( $roomz != 0 ){ ?> 

		<div class="row"> 
			<?php
			foreach ($roomz as $room ){ ?>


		<div class="col-12 col-md-6">
			<div class="card p-4 mb-4">
				<iframe src="https://www.tradingview.com/mediumwidgetembed/?symbols=<?php echo $room->post_title; ?>|1d&timezone=Etc/UTC&locale=en" height="210px" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>

	  			<button class="btn btn-success my-3" type="button" data-toggle="collapse" data-target="#collapse<?php echo $room->post_title; ?>" aria-expanded="false" aria-controls="collapse<?php echo $room->post_title; ?>">
	  				Chat 
	  			</button>
				
				<div class="collapse" id="collapse<?php echo $room->post_title; ?>">
					<?php pip_get_ifly_chat_rooms( $room->post_title ); ?>
				</div>
			</div>
		</div>



			<?php
			} ?>
		</div>
<?php } 

	wp_die();

}

add_action('wp_ajax_roomz_filter', 'pip_roomz_filter_function'); 
add_action('wp_ajax_nopriv_roomz_filter', 'pip_roomz_filter_function');






// function pip_dequeue_styles(){

// 	#wp_deregister_style($handle);
// 	#wp_dequeue_style($handle);

// 	if ( !( is_page( 'home' ) || is_page( 'front-page' )) ){

// 		$styles = array(
// 			'mp-theme',
// 			'mp-account-css',			
// 			'mepr-jquery-ui-smoothness',
// 			'jquery-ui-timepicker-addon',		
// 			'mp-signup',
// 			'mp-plans-css',
// 			'bp-show-friends-css',
// 			'bp-parent-css',
// 			'wsl-widget',
// 			'learn-press-jalerts',
// 			'learn-press-style',
// 			'tooltip',										
// 		);

// 		foreach ($styles as $style) {
// 			//wp_deregister_script($script);
// 			wp_dequeue_style($script);
// 		}
// 	}
// }

// add_action( 'wp_enqueue_scripts', 'pip_dequeue_styles', 1 );


// function pip_dequeue_scripts(){
// 	#wp_deregister_script($handle);
// 	#wp_dequeue_script($handle);

// 	if ( !( is_page( 'home' ) || is_page( 'front-page' )) ){

// 		$scripts = array(
// 			'iflychat-ajax',
// 			'mp-signup',			
// 			'bp-confirm',
// 			'bp-show-friends-js',		
// 			'bp-parent-js',
// 			'comment-reply',
// 			'bp-widget-members',
// 			'groups_widget_groups_list-js',
// 			'tooltip-js',
// 			'wsl-widget',
// 			'learn-press-jalerts',
// 			'learn-press-global',
// 			'learn-press-js',
// 			'learn-press-become-teacher',
// 			'toc-front',
// 			'bbpress-editor',
// 			'devicepx',
// 			'codebox',											
// 		);

// 		foreach ($scripts as $script) {
// 			//wp_deregister_script($script);
// 			wp_dequeue_script($script);
// 		}

// 	}

// }

// add_action( 'wp_enqueue_scripts', 'pip_dequeue_scripts', 0 );





///////////////////// Insert currency posts ///////////////////// 
// Helper function, only needed to be run one time on theme setup //


// $currencies = array('GOLD','EURJPY','JPYUSD','USDCAD','GBPUSD','USDCHF','BTCUSD','CHFJPY','NZDJPY','AUDUSD','NZDUSD','GBPCHF','GBPJPY','EURGBP','EURAUD','GBPCAD','GBPNZD','EURCAD','BTCUSD','ETHUSD');

// foreach ($currencies as $currency_pair) {
// 	wp_insert_post( 
// 		array( 'post_title' => $currency_pair, 'post_type'=>'currency', 'post_content'=>'')
// 	);
// }

//add page slug to body class, if on a page
//////////////////////////////////////////////////////////////////////
// remove_role( "pip_basic_member" );
// remove_role( "pip_pro_member" );

// $result = add_role( 'basic_member', __( 'Basic Member', 'piproomz' ), array( 'read' => true, 'level_0' => true ));

// if ( null !== $result ) {
//     echo "Success: {$result->name} user role created.";
// }
// else {
//     exit;
// }

// $result2 = add_role( 'pro_member', __( 'Pro Member', 'piproomz' ), array( 'read' => true, 'level_0' => true ));

// if ( null !== $result2 ) {
//     echo "Success: {$result2->name} user role created.";
// }
// else {
//     exit;
// }

