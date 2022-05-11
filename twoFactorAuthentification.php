<?php

require('vendor/autoload.php');

use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;
use Vonage\Verify\Request;


$basic = new Basic("411e9028","2W73DtmJqORMjOu9");
$client = new Client($basic);


$request = new Request('212669466359', "Vonage");
$response = $client->verify()->start($request);

echo "Started verification, `request_id` is " . $response->getRequestId();


$result = $client->verify()->check(REQUEST_ID, CODE);

var_dump($result->getResponseData());

try {
    $result = $client->verify()->cancel(REQUEST_ID);
    var_dump($result->getResponseData());
}

catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}
