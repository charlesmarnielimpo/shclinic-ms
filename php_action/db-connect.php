<?php

	$localhost = '127.0.0.1';
	$username = 'root';
	$password = '';
	$database = 'clinicmanagementsystem';

	// database connection
	$connect = new mysqli($localhost, $username, $password, $database);
	$connect->set_charset("utf8");
	
	// check connection
	if ($connect->connect_error) {
		die("Connection Failed: " . $connect->connect_error);
	} else {
		// echo "Successfully connected!";
	}
?>