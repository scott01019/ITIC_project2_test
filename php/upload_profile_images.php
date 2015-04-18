<?php
require_once 'db_connect.php';
require_once 'functions.php';
require_once 'get_img.php';

if (!isset($_SESSION)) session_start();

$profile_file_name = $_SERVER['REQUEST_TIME'] . '.jpg';
if ($_FILES['profile_img']['name']) {
	$tmp_name = $_FILES['profile_img']['name'];
	$dst_dir = '../resources/images/profiles/';
	move_uploaded_file($_FILES['profile_img']['tmp_name'], $dst_dir . $profile_file_name);
	$delete_old_profile_image = get_profile_img($db, $_SESSION['username']);
	if ($delete_old_profile_image != 'default.jpg') unlink($dst_dir . $delete_old_profile_image);
	$sql_save_profile_img = "UPDATE USERS SET PROFILE_IMG = '" . sanitizeString($db, $profile_file_name) . "' WHERE USERNAME = '" . sanitizeString($db, $_SESSION['username']) . "'";
	$check_save_profile_img = $db->query($sql_save_profile_img);
}

header('Location: ../index.php');
?>