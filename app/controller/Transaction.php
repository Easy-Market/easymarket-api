<?php
	/**
	 * 
	 */
	class Transaction extends Database
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
	}