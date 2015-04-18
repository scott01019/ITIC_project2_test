<?php
require_once'login.php';
require_once'db_connect.php';
require_once'functions.php';
require_once'auth.php';

$login = new Login($db, $_POST['username'], $_POST['password']);

if ($login->messages == 'Success!' && Auth::user()) {
	header('Location: ../views/user/index.php');
	exit;
} else {
	if(!isset($_SESSION)) session_start();
	$_SESSION['login_errors'] = $login->errors;
	header('Location: ../views/guest/login.php');
	exit;
}
?>