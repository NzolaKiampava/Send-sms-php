<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
// To set up environmental variables, see http://twil.io/secure
//$account_sid = getenv('AC0c99d0766447bc932c97e622559cabf3');
//$auth_token = getenv('c318f13c40c8675008a44cb3c9af13e0');
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

$sid = 'AC0c99d0766447bc932c97e622559cabf3';
$token = 'c318f13c40c8675008a44cb3c9af13e0';

// A Twilio number you own with SMS capabilities
$twilio_number = "+12545664105";

$client = new Client($sid, $token);
$message = $client->messages->create(
    // Where to send a text message (your cell phone?)
    '+244924598849',
    array(
        'from' => $twilio_number,
        'body' => 'I sent this message in under 10 minutes!'
    )
);

if($message){
    echo "message sent";
} else {
    echo "something happen";
}
