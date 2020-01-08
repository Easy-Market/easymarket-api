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
			$this->select('SELECT userID FROM users WHERE email ="'. $data["email"] .'" AND password ="'. $data["password"] .'"', false);
			$this->setSession('userID', $query['userID']);
			return (!$query['userID']) ? $query : 200 ;
		}
		public function join($data)
		{
			if ($this->insert('users', $data) == 200) {
				$this->setSession('userID', $this->lastID());
				return 
				$this->setVerification(array(
					'userID' => $this->getSession('userID'),
					'verificationCode' => 'xyz',
					'dateSent' => GLOBAL_DATE,
					'is_used' => 0
				));
			} else {
				return $this->insert('users', $data);
			}
		}
		public function setVerification($data)
		{
			return $this->insert('verification', $data);
		}
	}