<?php

namespace Structural\Adapter\Adapters;

use Structural\Adapter\Interfaces\PaymentInterface;
use Structural\Adapter\Services\NewPaymentService;

class NewPaymentAdapter implements PaymentInterface
{
    private $newPaymentService;

    public function __construct(NewPaymentService $service)
    {
        $this->newPaymentService = $service;
    }

    public function pay($amount)
    {
        // ترجمة الطلب
        return $this->newPaymentService->makePayment($amount);
    }
}
