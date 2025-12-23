<?php

namespace Structural\Adapter\Services;

class NewPaymentService
{
    public function makePayment($money)
    {
        return "Paid $money using NEW payment gateway";
    }
}
