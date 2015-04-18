<?php
require_once 'get_img.php';
require_once 'db_connect.php';

$results = array();
$users = $_POST['users'];

for ($i = 0; $i < count($users); $i++) {
	$result = get_profile_img($db, $users[$i]);
	if ($result) array_push($results, $result);
	else array_push($results, "default.jpg");
}

header("Content-Type: application/json", true);
echo json_encode($results);
?>