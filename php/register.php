<?php
require_once 'functions.php';

class Register {
	protected $username;
	protected $password;
	protected $db;
	public $messages = array();
	public $errors = array();

	public function __construct($db, $username, $password, $password_confirm) {
		$this->db = $db;
		if ($this->checkValid(sanitizeString($db, $username), 
						sanitizeString($db, $password),
						sanitizeString($db, $password_confirm))) {
			$this->username = sanitizeString($db, $username);
			$this->password = sanitizeString($db, sha1(getSalt() . $password));
			$this->register();
			$this->messages = 'Success!';
		}
		$this->db->close();
	}

	public function checkValid($username, $password, $password_confirm) {
		if (empty($username) || strlen($username) < 5 || strlen($username) > 25) {
			$this->errors = 'Username must have more than 4 characters and less than 26 characters!';
			return false;
		} else if (empty($password) || strlen($password) < 6) {
			$this->errors = 'Password must have more than 5 characters!';
			return false;
		} else if ($password != $password_confirm) {
			$this->errors = 'Password and Password Confirmation do not match!';
			return false;
		} else {
			$sql_check_unique_username = "SELECT * FROM USERS where USERNAME = '" . $username . "'";
			$query_check_unique_username = $this->db->query($sql_check_unique_username);
			if ($query_check_unique_username->num_rows == 1) {
				$this->errors = 'Username already in use.';
				return false;
			} else {
				return true;
			}
		}
	} 

	public function register() {
		if (! ($stmt = $this->db->prepare('INSERT INTO USERS(USERNAME, PASSWORD, PROFILE_IMG, TIME_STAMP) VALUES (?,?,?,?)'))) {
			echo 'Prepare failed: (' . $this->db->errno . ') ' . $this->db->error;
		}

		$default_profile_img = 'default.jpg';
		if (!$stmt->bind_param('ssss', $this->username, $this->password, $default_profile_img, $_SERVER['REQUEST_TIME'])) {
			echo 'Binding parameters failed: (' . $stmt->errno . ') ' . $stmt->error;
		}

		if (!$stmt->execute()) {
			echo 'Execute failed: (' . $stmt->errno . ') ' . $stmt->error;
		}
	}
};
?>