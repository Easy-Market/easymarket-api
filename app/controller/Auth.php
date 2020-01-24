<?php
	/**
	 * 
	 */
	class Auth extends Database
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
		public function login($data)
		{
			$query = 
			$this->select('SELECT us_id FROM users WHERE us_email ="'.$data["email"].'" AND us_password ="'.$data["password"].'"', false);
			//$this->setSession('userID', $query['userID']);
			//return (!$query['userID']) ? $query : 200 ;
		}
		public function join($data)
		{
			$check_email = $this->select('SELECT * FROM users WHERE us_email="'. $data["us_email"] .'"', true);
			if ($check_email == "null") {
				if ($this->insert('users', $data) == 200) {
					$this->setSession('userID', $this->lastID());
					return 200;
				} else {
					return $this->insert('users', $data);
				}
			} else {
				$this->viewJson();
				return json_encode(array(
					'code' => 409,
					'message' => 'email exists' 
				));
			}
		}
		public function setVerification($data)
		{
			return $this->insert('verification', $data);
		}
	}