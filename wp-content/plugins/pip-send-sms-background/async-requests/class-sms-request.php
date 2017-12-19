<?php

class WP_Sms_Request extends WP_Async_Request {

	use WP_Sms_Logger;

	/**
	 * @var string
	 */
	protected $action = 'example_request';

		add_action('acf/save_post', 'pip_signals_post_publish', 10, 1);

	/**
	 * Handle
	 *
	 * Override this method to perform any actions required
	 * during the async request.
	 */
	protected function handle() {
		$message = $this->get_message( $_POST['name'] );

		$this->really_long_running_task();

		$this->log( $message );

	}

}