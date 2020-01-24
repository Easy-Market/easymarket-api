<?php  
	session_start();
	include_once '../connect.php';
	include_once '../controller/EasyMarket.php';
	include_once '../controller/Database.php';
	include_once '../controller/Auth.php';
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$auth = new Auth($conn);
		$data = array(
			'us_email' => $_GET['email'],
			'us_phone' => $_GET['phone'],
			'us_password' => password_hash($_GET['password'], PASSWORD_DEFAULT),
			'us_fname' => $_GET['first_name'],
			'us_lname' => $_GET['last_name'],
			'us_businessname' => $_GET['business_name'],
			'us_cansell' => $_GET['cansell'], 
			'us_displaymode' => $_GET['displaymode'],
			'vendorurl' => $_GET['url']
		);
		echo $auth->join($data);
	}