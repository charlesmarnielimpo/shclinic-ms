<?php 
	require_once '../php_action/db-connect.php';

	$email = trim($_POST['email']);

	$sql = "SELECT email FROM users WHERE email = '$email'";
	$result = $connect->query($sql);

	if ($result->num_rows > 0) {
		echo "false";
	} else {
		echo "true";
	}