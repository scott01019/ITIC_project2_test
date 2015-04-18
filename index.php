<?php
require_once __DIR__ . '/php/auth.php';
require_once __DIR__ . '/php/functions.php';

if (!isset($_SESSION)) session_start();
$_SESSION['id'] = sha1(getSalt() . $_SERVER['REQUEST_TIME']);

if (Auth::guest()) {
	header('Location: views/guest/index.php');
} else if (Auth::user()) {
	header('Location: views/user/index.php');
} else {
}
?>