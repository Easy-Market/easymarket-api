<?php 
	header("Content-Type: Application/json");
	$err = array(
		'code' => 404,
		'message' => 'Oops! what you seek is beyong the realm of mortals' 
	);
	echo json_encode($err);
?>