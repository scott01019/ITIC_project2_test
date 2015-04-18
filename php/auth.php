<?php
class Auth {
	public static function user() {
		if (!isset($_SESSION)) session_start();
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
			return true;
		else return false;
	}

	public static function guest() {
		if (!isset($_SESSION)) session_start();
		if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
			return true;
		else return false;
	}

	public static function logout() {
		if (!isset($_SESSION)) session_start();
		session_destroy();
	}
}
?>