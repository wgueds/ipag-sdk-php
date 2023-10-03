<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Ipag\Sdk\Core\IpagClient;
use Ipag\Sdk\Core\IpagEnvironment;

$ipagClient = new IpagClient(
    'apiID',
    'apiKey',
    IpagEnvironment::SANDBOX
);

try {

    $transactionId = 27;
    $transactionUuid = '1ee46630-7056-67e8-ab69-0242ac120006';
    $transactionTid = 'b5a38ba638a5c471e040fe86b4ef4726';
    $orderId = 27;

    // Get By Id
    // $responsePayment = $ipagClient->payment()->getById($transactionId);
    // dd($responsePayment->getData());

    // Get By Uuid
    // $responsePayment = $ipagClient->payment()->getByUuid($transactionUuid);
    // dd($responsePayment->getData());

    // Get By Tid
    // $responsePayment = $ipagClient->payment()->getByUuid($transactionTid);
    // dd($responsePayment->getData());

    // Get By Order Id
    // $responsePayment = $ipagClient->payment()->getByUuid($orderId);
    // dd($responsePayment->getData());

} catch (\Throwable $th) {
    echo $th->getMessage() . PHP_EOL;
}