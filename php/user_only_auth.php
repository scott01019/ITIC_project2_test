<?php
require_once __DIR__ . '/auth.php';

if (!isset($_SESSION)) session_start();
if (!Auth::user()) {
    header('Location: ' . __DIR__ . 'index.php');
}
?>