<?php
require_once 'functions.php';

class Login {
	protected $db;
	public $messages = array();
	public $errors = array();

	public function __construct($db, $username, $password) {
		$this->db = $db;
		if ($this->checkValid(sanitizeString($db, $username), 
						sanitizeString($db, $password))) {
			if (!isset($_SESSION)) session_start();
			$_SESSION['logged_in'] = true;
			$_SESSION['username'] = $username;
			$this->messages = 'Success!';
		}
		$this->db->close();
	}

	public function checkValid($username, $password) {
		if (empty($username) || strlen($username) < 5 || strlen($username) > 25) {
			$this->errors = 'Username must have more than 4 characters and less than 26 characters!';
			return false;
		} else if (empty($password) || strlen($password) < 6) {
			$this->errors = 'Password must have more than 5 characters!';
			return false;
		}  else {
			$sql_check_valid_credentials = "SELECT * FROM USERS where USERNAME = '" . $username . "' and PASSWORD = '" . sha1(getSalt() . $password) . "'";
			$query_check_valid_credentials = $this->db->query($sql_check_valid_credentials);
			if ($query_check_valid_credentials->num_rows != 1) {
				$this->errors = 'Invalid username and password.';
				return false;
			} else {
				return true;
			}
		}
	} 
}
?>