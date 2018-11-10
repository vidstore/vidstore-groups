<?php

class Groups_User {
	public $user;
	public function __contruct( $user_id ) {
		$this->user = get_user_by( "id", $user_id );
	}
}

class Groups_Group {
	public static function read( $group_id ) {
		global $wpdb;
		$group_table = "{$wpdb->prefix}groups_group";
		return $wpdb->get_row( $wpdb->prepare(
			"SELECT * FROM $group_table WHERE group_id = %d",
			$group_id
		));
	}
}

class Groups_User_Group {
	public static function read( $user_id, $group_id ) {
		global $wpdb;
		$user_group_table = "{$wpdb->prefix}groups_user_group";
		return $wpdb->get_row( $wpdb->prepare(
			"SELECT * FROM $user_group_table WHERE user_id = %d AND group_id = %d",
			$user_id,
			$group_id
		));
	}
}
