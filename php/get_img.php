<?php
require_once 'db_connect.php';
require_once 'functions.php';

if(!isset($_SESSION)) session_start();

function get_profile_img($db, $username) {
	$username = sanitizeString($db, $username);
	$sql_profile_img = "SELECT PROFILE_IMG FROM USERS WHERE USERNAME = '" . $username . "'";
	$check_profile_img = $db->query($sql_profile_img);
	if ($check_profile_img) return $check_profile_img->fetch_row()[0];
	else return 'default.jpg';
}

function get_banner_img($db, $username) {
	$username = sanitizeString($db, $username);
	$sql_banner_img = "SELECT BANNER_IMG FROM USERS WHERE USERNAME = '" . $username . "'";
	$check_banner_img = $db->query($sql_banner_img);
	if ($check_banner_img) return $check_banner_img->fetch_row()[0];
	else return 'default.jpg';
}
?>