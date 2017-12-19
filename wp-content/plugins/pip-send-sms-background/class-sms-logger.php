<?php

trait WP_Sms_Logger {

	/**
	 * Really long running process
	 *
	 * @return int
	 */
	public function really_long_running_task() {
		return sleep( 5 );
	}

	/**
	 * Log
	 *
	 * @param string $message
	 */
	public function log( $message ) {
		error_log( $message );
	}

	/**
	 * Get lorem
	 *
	 * @param string $name
	 *
	 * @return string
	 */
		$twilioArgs = array( 
			'number_to' => $memberNumber,
			'message' => "Hey! New signal from piproomz.com for: $signal_pair. Check it out! $signal_url "
		); 
		twl_send_sms( $twilioArgs );
	}

}