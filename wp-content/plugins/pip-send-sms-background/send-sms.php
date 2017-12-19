<?php
/*
Plugin Name: Pip Send SMS Background
Plugin URI: https://github.com/A5hleyRich/wp-background-processing
Description: Send SMS in background
Author: Ashley Rich
Version: 0.1
Author URI: https://deliciousbrains.com/
Text Domain: send-sms
Domain Path: /languages/
*/

class Sms_Background_Processing {

	/**
	 * @var WP_Example_Request
	 */
	protected $process_single;

	/**
	 * @var WP_Example_Process
	 */
	protected $process_all;

	/**
	 * Sms_Background_Processing constructor.
	 */
	public function __construct() {
		// add_action( 'plugins_loaded', array( $this, 'init' ) );
		// add_action( 'admin_bar_menu', array( $this, 'admin_bar' ), 100 );
		add_action( 'init', array( $this, 'process_handler' ) );
	}

	/**
	 * Init
	 */
	public function init() {
		require_once plugin_dir_path( __FILE__ ) . 'class-logger.php';
		require_once plugin_dir_path( __FILE__ ) . 'async-requests/class-sms-request.php';
		//require_once plugin_dir_path( __FILE__ ) . 'background-processes/class-example-process.php';

		$this->process_single = new WP_Sms_Request();
		//$this->process_all    = new WP_Example_Process();
	}

	/**
	 * Admin bar
	 *
	 * @param WP_Admin_Bar $wp_admin_bar
	 */
	// public function admin_bar( $wp_admin_bar ) {
	// 	if ( ! current_user_can( 'manage_options' ) ) {
	// 		return;
	// 	}

	// 	$wp_admin_bar->add_menu( array(
	// 		'id'    => 'send-sms',
	// 		'title' => __( 'Process', 'send-sms' ),
	// 		'href'  => '#',
	// 	) );

	// 	$wp_admin_bar->add_menu( array(
	// 		'parent' => 'send-sms',
	// 		'id'     => 'send-sms-single',
	// 		'title'  => __( 'Single User', 'send-sms' ),
	// 		'href'   => wp_nonce_url( admin_url( '?process=single'), 'process' ),
	// 	) );

	// 	$wp_admin_bar->add_menu( array(
	// 		'parent' => 'send-sms',
	// 		'id'     => 'send-sms-all',
	// 		'title'  => __( 'All Users', 'send-sms' ),
	// 		'href'   => wp_nonce_url( admin_url( '?process=all'), 'process' ),
	// 	) );
	// }

	/**
	 * Process handler
	 */
	public function process_handler() {
		if ( ! isset( $_GET['process'] ) || ! isset( $_GET['_wpnonce'] ) ) {
			return;
		}

		if ( ! wp_verify_nonce( $_GET['_wpnonce'], 'process') ) {
			return;
		}

		if ( 'single' === $_GET['process'] ) {
			$this->handle_single();
		}

		// if ( 'all' === $_GET['process'] ) {
		// 	$this->handle_all();
		// }
	}

	/**
	 * Handle single
	 */
	protected function handle_single() {
		$numbers = $this->get_numbers();


		// $rand  = array_rand( $names, 1 );
		// $name  = $names[ $rand ];




		//$this->process_single->data( array( 'name' => $name ) )->dispatch();
	}

	/**
	 * Handle all
	 */
	// protected function handle_all() {
	// 	$names = $this->get_numbers();

	// 	foreach ( $names as $name ) {
	// 		$this->process_all->push_to_queue( $name );
	// 	}

	// 	$this->process_all->save()->dispatch();
	// }

	/**
	 * Get names
	 *
	 * @return array
	 */
	protected function get_numbers() {

		// WP_User_Query arguments
		$args = array(
			'role' => 'pro_member'
		);

		// The User Query
		$wp_user_query = new WP_User_Query( $args );

		$members = $wp_user_query->get_results();

		// Build Array of User Numbers
		$i = 0;
		foreach ($members as $member) {
			$user_id = $member->ID;
			$user_info = get_userdata( $user_id );
			$user_phone = $user_info->mepr_phone;
		// Loop through users and all their numbers to the array using a counter.
			$memberNumbers[$i] = $user_phone;
			$i++;
		}

		return $memberNumbers;

	}

new Sms_Background_Processing();