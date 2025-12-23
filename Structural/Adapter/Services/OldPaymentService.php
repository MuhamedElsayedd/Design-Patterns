<?php

namespace Structural\Adapter\Services;

use Structural\Adapter\Interfaces\PaymentInterface;

class OldPaymentService implements PaymentInterface
{
    public function pay($amount)
    {
        return "Paid $amount using OLD payment system";
    }
}
