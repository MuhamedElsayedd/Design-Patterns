<?php

namespace Structural\Facade\Subsystem;

class Payment
{
    public function pay($amount)
    {
        return "Paid $amount successfully";
    }
}
