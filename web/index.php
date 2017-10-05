
<?php
// Required if your environment does not handle autoloading
require '../vendor/autoload.php';

echo '<p>Hello World</p>';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACdbdf59dcc984f9593d622c60e94f6ac5';
$token = '51614e44f59b7e12dc94f21f0bb31d78';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+‭19177558295‬',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+18622256372',
        // the body of the text message you'd like to send
        'body' => 'Hello from Christos Zikopoulos CS 643 Fall 2017'
    )
);

<html>
<header><title>This is title</title>
 </header>
<body>
Hello world
</body>
</html>
