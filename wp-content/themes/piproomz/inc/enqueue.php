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



if ( !( is_page( 'home' ) || is_page( 'front-page' )) ){
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/dashboard.min.css', array() );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
		wp_enqueue_script( 'cookie', get_template_directory_uri() . '/js/cookie.js', array(), true );
		
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/dashboard.min.js', array(), true );

		// Initiate JS functions
		wp_enqueue_script( 'pip-init', get_template_directory_uri() . '/js/init.js', array(), false);
		

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

}else{

		///////////////////// Remove Plugin Scripts and Styles on Home Page /////////////////////
		function pm_remove_all_scripts() {
		    global $wp_scripts;
		    $wp_scripts->queue = array();
		}
		add_action('wp_print_scripts', 'pm_remove_all_scripts', 10);
		function pm_remove_all_styles() {
		    global $wp_styles;
		    $wp_styles->queue = array();
		}
		add_action('wp_print_styles', 'pm_remove_all_styles', 10);
}



	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


