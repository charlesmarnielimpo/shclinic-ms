<?php 
	require_once '../php_action/db-connect.php';

	$contact_number = trim($_POST['contact_number']);

	$sql = "SELECT contact_number FROM users WHERE contact_number = '$contact_number'";
	$result = $connect->query($sql);

	if ($result->num_rows > 0) {
		echo "false";
	} else {
		echo "true";
	}