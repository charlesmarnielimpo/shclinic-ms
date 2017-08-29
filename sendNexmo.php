<?php

$credentials = new Nexmo\Client\Credentials\Basic('d3b8db43', 'a1e6e1acaf236709');
$client = new Nexmo\Client($credentials);

$message = $client->message()->send([
  'from' => 'Clinic-MS-Test',
  'to' => '09305739237',
  'text' => 'A text message sent using the Nexmo SMS API'
]);
?>