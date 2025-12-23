<?php

namespace Structural\Decorator\Concrete;

use Structural\Decorator\Component\Coffee;

class SimpleCoffee implements Coffee
{
    public function cost(): float
    {
        return 10;
    }

    public function description(): string
    {
        return "Simple Coffee";
    }
}
