<?php
	/**
	 * 
	 */
	class Users extends Database
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
		public function userData()
		{
			$conn = $this->conn;
			return $this->select("SELECT * FROM users WHERE userID = ". $this->getSession('userID'), true);
		}
	}