<?php 

function send_signal_sms( $post_id )
{

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
			$wp_user_query = new WP_User_Query( $args );

			$members = $wp_user_query->get_results();

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