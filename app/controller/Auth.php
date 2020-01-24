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
			$checkEmail = $this->select('SELECT * FROM users WHERE us_email = "'.$data["email"].'"');
			if()
			if ($this->insert('users', $data) == 200) {
				$this->setSession('userID', $this->lastID());
				return 200;
			} else {
				return $this->insert('users', $data);
			}
		}
		public function setVerification($data)
		{
			return $this->insert('verification', $data);
		}
	}