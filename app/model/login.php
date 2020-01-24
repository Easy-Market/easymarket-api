<?php  
	session_start();
	include_once '../connect.php';
	include_once '../controller/EasyMarket.php';
	include_once '../controller/Database.php';
	include_once '../controller/Auth.php';
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$auth = new Auth($conn);
		$data = array(
			'email' => $_GET['email'],
			'password' => password_hash($_GET['password'], PASSWORD_DEFAULT)
		);
		echo $auth->login($data);
	}