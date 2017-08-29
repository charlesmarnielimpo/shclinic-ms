<?php
	require('class-Clockwork.php');
	$apikey = "6e6e0c8c2aaf2bd365145708a2c0a1bc5b15bc77";
	$clockwork = new Clockwork($apikey);

	// Setup and send a message
  $message = array( 'to' => '639367995285', 'message' => 'This is a test!' );
  $result = $clockwork->send( $message );
?>
