<?php
	session_start();

	require_once 'php_action/db-connect.php';

	if (!$_SESSION['session_id']) {
		header('location: index.php');
	}
?>