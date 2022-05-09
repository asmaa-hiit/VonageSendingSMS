<?php

require('vendor/autoload.php');

use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;

$basic = new Basic("411e9028","2W73DtmJqORMjOu9");
$client = new Client($basic);

//envoi message normal
$response = $client->sms()->send(
    new SMS("212669466359", "Sender", 'A text message sent using the Nexmo SMS API')
);

$message = $response->current();

if ($message->getStatus() == 0) {
    echo "The message was sent successfully\n";
} else {
    echo "The message failed with status: " . $message->getStatus() . "\n";
}


//envoi message à deux facteur

