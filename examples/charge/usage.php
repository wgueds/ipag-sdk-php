<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Ipag\Sdk\Core\IpagClient;
use Ipag\Sdk\Core\IpagEnvironment;
use Ipag\Sdk\Exception\HttpClientException;

$ipagClient = new IpagClient('lucas', 'E089-31668545-5BB2521F-72F14DB1-283C', IpagEnvironment::LOCAL);

$charge = new \Ipag\Sdk\Model\Charge([
    'amount' => 160.50,
    'description' => 'Cobrança referente a negociação de débito pendente na Empresa X',
    'due_date' => '2020-10-30',
    'frequency' => 1,
    'interval' => 'month',
    'type' => 'charge',
    'last_charge_date' => '2020-10-30',
    'callback_url' => 'https://api.ipag.test/retorno_charge',
    'auto_debit' => false,
    'installments' => 12,
    'is_active' => true,
    'products' => [2],
    'customer' => [
        'name' => 'Maria Francisca',
    ],
    'checkout_settings' => [
        'max_installments' => 12,
    ]
]);

try {

    $charge_id = 1;

    // Create
    // $responseCharge = $ipagClient->charge()->create($charge);
    // dd($responseCharge);

    // Update
    // $responseCharge = $ipagClient->charge()->update($charge, $charge_id);
    // dd($responseCharge);

    // Get
    // $responseCharge = $ipagClient->charge()->get($charge_id);
    // dd($responseCharge);

    // List
    // $responseCharge = $ipagClient->charge()->list([
    //     'is_active' => false,
    // ]);
    // dd($responseCharge);

} catch (HttpClientException $e) {
    echo $e->getMessage() . PHP_EOL;
}