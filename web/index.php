<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACdbdf59dcc984f9593d622c60e94f6ac5';
$token = '51614e44f59b7e12dc94f21f0bb31d78';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+19176174152',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+18622256372',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    )
);