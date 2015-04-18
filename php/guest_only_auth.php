<?php
require_once __DIR__ . '/auth.php';

if (! Auth::guest()) {
	header('Location: ' . __DIR__ . 'index.php');
}
?>