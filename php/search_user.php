<?php
require_once 'db_connect.php';
require_once 'functions.php';

function searchUser($db) {
	if (!isset($_POST['search'])) $_POST['search'] = 'not set';

	$search = sanitizeString($db, $_POST['search']);
	$data = array();
	while (count($data) < 10 && isset($search) && strlen($search) > 1) {
		$sql_search_users = "SELECT USERNAME FROM USERS WHERE USERNAME LIKE '%" . $search . "%'";
		$check_search_users = $db->query($sql_search_users);

		while ($row = $check_search_users->fetch_row()) {
			array_push($data, $row[0]);
		}
		$data = array_unique($data);
		$search = substr($search, 0, -1);
	}
	return array_values($data);
}
?>