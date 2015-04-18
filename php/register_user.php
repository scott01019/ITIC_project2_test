<?php
require_once 'register.php';
require_once 'db_connect.php';

$register = new Register($db, $_POST['username'], $_POST['password'], $_POST['password_confirm']);

if ($register->messages == 'Success!') {
	header('Location: ../views/guest/login.php');
	exit;
} else {
	if(!isset($_SESSION)) session_start();
	$_SESSION['register_errors'] = $register->errors;
	header('Location: ../views/guest/registration.php');
	exit;
}
?>