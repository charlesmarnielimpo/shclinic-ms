<?php 
	require_once 'php_action/core.php';

	// remove all session variables
	session_unset();

	// destroy session
	session_destroy();

	header('location: index.php');
?>