<?php

namespace Structural\Decorator\Decorator;

use Structural\Decorator\Component\Coffee;

abstract class CoffeeDecorator implements Coffee
{
    protected Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }
}
