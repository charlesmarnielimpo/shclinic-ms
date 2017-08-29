<?php 
	$ch = curl_init();
	$parameters = array(
	    'apikey' => '795be3ecf9ff52a3d639de281dc2c377', //Your API KEY
	    'number' => '09305739237',
	    'message' => 'I just sent my first message with Semaphore',
	    'sendername' => 'Clinic-MS'
	);
	curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/messages' );
	curl_setopt( $ch, CURLOPT_POST, 1 );

	//Send the parameters set above with the request
	curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

	// Receive response from server
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	$output = curl_exec( $ch );
	curl_close ($ch);

	//Show the server response
	echo $output;
?>
                  