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
	    
	    buddypress()->groups->nav->edit_nav( array( 'name' => __( 'Room Discussion', 'buddypress' ) ), 'forum', bp_current_item() );
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



	// Auto Generate Title and Slug for Signals
	//////////////////////////////////////////////////////////////////////

	function acf_title( $value, $post_id, $field ) {
		if ( get_post_type( $post_id ) == 'signal' ) {

			$new_title = get_field('currency_pair', $post_id) . ' ' . $value;
			$new_slug = sanitize_title( $new_title );

			// update post
			wp_update_post( array(
				'ID'         => $post_id,
				'post_title' => $new_title,
				'post_name'  => $new_slug,
				) );
		}
		return $value;
	}
	add_filter( 'acf/save_post', 'acf_title', 10, 3 );

