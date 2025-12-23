<?php

use Structural\Adapter\Services\OldPaymentService;
use Structural\Adapter\Services\NewPaymentService;
use Structural\Adapter\Adapters\NewPaymentAdapter;

function processPayment($paymentService)
{
    echo $paymentService->pay(100) . PHP_EOL;
}

// Old system
processPayment(new OldPaymentService());

// New system through Adapter
$newService = new NewPaymentService();
$adapter = new NewPaymentAdapter($newService);

processPayment($adapter);
