<?php 
/**
 * Custom Post Types
 *
 * @package piproomz
 */

// Register Custom Post Type Broker
// Post Type Key: broker
function pip_create_broker_cpt() {

	$labels = array(
		'name' => __( 'Brokers', 'Post Type General Name', 'text_domain' ),
		'singular_name' => __( 'Broker', 'Post Type Singular Name', 'text_domain' ),
		'menu_name' => __( 'Brokers', 'text_domain' ),
		'name_admin_bar' => __( 'Broker', 'text_domain' ),
		'archives' => __( 'Broker Archives', 'text_domain' ),
		'attributes' => __( 'Broker Attributes', 'text_domain' ),
		'parent_item_colon' => __( 'Parent Broker:', 'text_domain' ),
		'all_items' => __( 'All Brokers', 'text_domain' ),
		'add_new_item' => __( 'Add New Broker', 'text_domain' ),
		'add_new' => __( 'Add New', 'text_domain' ),
		'new_item' => __( 'New Broker', 'text_domain' ),
		'edit_item' => __( 'Edit Broker', 'text_domain' ),
		'update_item' => __( 'Update Broker', 'text_domain' ),
		'view_item' => __( 'View Broker', 'text_domain' ),
		'view_items' => __( 'View Brokers', 'text_domain' ),
		'search_items' => __( 'Search Broker', 'text_domain' ),
		'not_found' => __( 'Not found', 'text_domain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
		'featured_image' => __( 'Featured Image', 'text_domain' ),
		'set_featured_image' => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image' => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item' => __( 'Insert into Broker', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Broker', 'text_domain' ),
		'items_list' => __( 'Brokers list', 'text_domain' ),
		'items_list_navigation' => __( 'Brokers list navigation', 'text_domain' ),
		'filter_items_list' => __( 'Filter Brokers list', 'text_domain' ),
	);
	$args = array(
		'label' => __( 'Broker', 'text_domain' ),
		'description' => __( '', 'text_domain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true, 
		'capability_type' => 'post',
	);
	register_post_type( 'broker', $args );

}
add_action( 'init', 'pip_create_broker_cpt', 0 );


add_action('wp', 'pip_redirect_archive');
function pip_redirect_archive() {
    global $post;
    if( is_post_type_archive( 'broker' ) ){
        wp_redirect( home_url('/') );
		  exit;
    }
    
}


/**
 * Custom Post Types
 *
 * @package piproomz
 */

// Register Custom Post Type Signal
// Post Type Key: Signal
function pip_create_Signal_cpt() {

	$labels = array(
		'name' => __( 'Signals', 'Post Type General Name', 'text_domain' ),
		'singular_name' => __( 'Signal', 'Post Type Singular Name', 'text_domain' ),
		'menu_name' => __( 'Signals', 'text_domain' ),
		'name_admin_bar' => __( 'Signal', 'text_domain' ),
		'archives' => __( 'Signal Archives', 'text_domain' ),
		'attributes' => __( 'Signal Attributes', 'text_domain' ),
		'parent_item_colon' => __( 'Parent Signal:', 'text_domain' ),
		'all_items' => __( 'All Signals', 'text_domain' ),
		'add_new_item' => __( 'Add New Signal', 'text_domain' ),
		'add_new' => __( 'Add New', 'text_domain' ),
		'new_item' => __( 'New Signal', 'text_domain' ),
		'edit_item' => __( 'Edit Signal', 'text_domain' ),
		'update_item' => __( 'Update Signal', 'text_domain' ),
		'view_item' => __( 'View Signal', 'text_domain' ),
		'view_items' => __( 'View Signals', 'text_domain' ),
		'search_items' => __( 'Search Signal', 'text_domain' ),
		'not_found' => __( 'Not found', 'text_domain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
		'featured_image' => __( 'Featured Image', 'text_domain' ),
		'set_featured_image' => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image' => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item' => __( 'Insert into Signal', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Signal', 'text_domain' ),
		'items_list' => __( 'Signals list', 'text_domain' ),
		'items_list_navigation' => __( 'Signals list navigation', 'text_domain' ),
		'filter_items_list' => __( 'Filter Signals list', 'text_domain' ),
	);
	$args = array(
		'label' => __( 'Signal', 'text_domain' ),
		'description' => __( '', 'text_domain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-chart-area',
		'supports' => array('custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'signal', $args );

}
add_action( 'init', 'pip_create_Signal_cpt', 0 );


function pip_add_support_glossary_cpt() {

	$args = array(

		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
	);

	add_post_type_support('glossary', $args);
}

add_action( 'init', 'pip_add_support_glossary_cpt', 0 );


// Register Taxonomy Category
// Taxonomy Key: category
function create_category_tax() {

	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'text_domain' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'text_domain' ),
		'search_items'      => __( 'Search Categories', 'text_domain' ),
		'all_items'         => __( 'All Categories', 'text_domain' ),
		'parent_item'       => __( 'Parent Category', 'text_domain' ),
		'parent_item_colon' => __( 'Parent Category:', 'text_domain' ),
		'edit_item'         => __( 'Edit Category', 'text_domain' ),
		'update_item'       => __( 'Update Category', 'text_domain' ),
		'add_new_item'      => __( 'Add New Category', 'text_domain' ),
		'new_item_name'     => __( 'New Category Name', 'text_domain' ),
		'menu_name'         => __( 'Category', 'text_domain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'text_domain' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
	);
	register_taxonomy( 'category', array('broker','Signal' ), $args );

}
add_action( 'init', 'create_category_tax' );