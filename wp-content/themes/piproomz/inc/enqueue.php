<?php
/**
 * Understrap enqueue scripts
 *
 * @package piproomz
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		
		// if ( is_page_template( 'page-templates/register.php' ) ) {
		// 	// Phone number field validator
		// 	wp_enqueue_script( 'cleave', get_template_directory_uri() . '/node_modules/cleave.js/dist/cleave.js', array(), $the_theme->get( 'Version' ), false );
		// 	wp_enqueue_script( 'cleave-phone', get_template_directory_uri() . '/node_modules/cleave.js/dist/addons/cleave-phone.i18n.js', array(), $the_theme->get( 'Version' ), false );
		// 	wp_enqueue_script( 'cleave-init', get_template_directory_uri() . '/js/cleave-init.js', array(), $the_theme->get( 'Version' ), false );
		// }

		// Initiate JS functions
		wp_enqueue_script( 'pip-init', get_template_directory_uri() . '/js/init.js', array(), false);
		

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


