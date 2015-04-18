<?php
require_once 'db_connect.php';
require_once 'functions.php';

if (!isset($_POST['next_page']) || $_POST['next_page'] < 0) $_POST['next_page'] = 1;

$next_page = sanitizeString($db, $_POST['next_page']);
$limit = 25;
$sql_get_users = "SELECT USERNAME FROM USERS LIMIT " . $limit . " OFFSET " . $limit * $next_page;
$check_get_users = $db->query($sql_get_users);

$data = array();
while ($row = $check_get_users->fetch_row()) {
	array_push($data, $row[0]);
}

header("Content-Type: application/json", true);
echo json_encode($data);
$db->close();
?>