<html>
<header><title>CS43 TwilioSend Project</title></header>
<body>
<p>Hi! This application is used to sent a text message stating which student of CS 643 made the project.</p>
<p>Please let Dr. Scharff know if you see this message.</p>
<p>Thanks a lot!"</p>
</body>
</html>


<?php
// Required if your environment does not handle autoloading
require '../vendor/autoload.php';


use Twilio\Twiml;

$response = new Twiml;
$body = $_REQUEST['Body'];

if( $body == 'hello' ){
    $response->message('Hi!');
}else if( $body == 'bye' ){
    $response->message('Goodbye');
}
print $response;
