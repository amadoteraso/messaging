<?php
require_once 'vendor/autoload.php'; // Load Composer's autoloader
use GuzzleHttp\Client;

$from = $_POST['from'];
$to = $_POST['to'];
$message = $_POST['message'];

$client = new Client([
    'base_uri' => 'https://api.infobip.com/sms/2/text/single',
    'headers' => [
        'Authorization' => 'App 1b9445fed20fa05d74502028e6a9275b-00ac0c9c-b746-46db-9edc-e820a8873a4d'
    ]
]);

$response = $client->request('POST', '', [
    'json' => [
        'from' => $from,
        'to' => $to,
        'text' => $message
    ]
]);

echo 'SMS Sent!';
