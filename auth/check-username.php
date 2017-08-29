<?php 
	require_once '../php_action/db-connect.php';

	$username = trim($_POST['username']);

	$sql = "SELECT username FROM users WHERE username = '$username'";
	$result = $connect->query($sql);

	if ($result->num_rows > 0) {
		echo "false";
	} else {
		echo "true";
	}