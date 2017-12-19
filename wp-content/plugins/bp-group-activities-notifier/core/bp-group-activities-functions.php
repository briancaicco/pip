<?php


/**
 * Just formats the notification
 *
 * @param string $action
 * @param int $item_id
 * @param int $secondary_item_id
 * @param int $total_items
 * @param string $format
 * @return string|array
 */

function bp_local_group_notifier_format_notifications( $action, $item_id, $secondary_item_id, $total_items, $format = 'string' ) {

	$group_id = $item_id;
	$group = groups_get_group( array( 'group_id' => $group_id ) );
	$group_link = bp_get_group_permalink( $group );

	if ( (int) $total_items > 1 ) {

		$text = sprintf( __( '%1$d new activities in the group "%2$s"', 'bp-group-activities-notifier' ), (int) $total_items, $group->name );

		if ( 'string' == $format ) {
			return '<a href="' . $group_link . '" title="' . __( 'New group Activities', 'bp-group-activities-notifier' ) . '">' . $text . '</a>';
		} else {
			return array(
				'link' => $group_link,
				'text' => $text
			);
		}
	} else {

		$activity= new BP_Activity_Activity($secondary_item_id);

		$text = strip_tags( $activity->action );//here is the hack, think about it :)

		$notification_link = bp_activity_get_permalink( $activity->id, $activity );

		if ( 'string' == $format ) {
			return '<a href="' . $notification_link . '" title="' .$text . '">' . $text . '</a>';
		} else {
			return array(
				'link' => $notification_link,
				'text' => $text
			);
		}
	}
}
