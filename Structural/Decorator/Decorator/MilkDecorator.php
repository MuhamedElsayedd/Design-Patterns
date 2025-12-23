<?php

namespace Structural\Decorator\Decorator;

class MilkDecorator extends CoffeeDecorator
{
    public function cost(): float
    {
        return $this->coffee->cost() + 3;
    }

    public function description(): string
    {
        return $this->coffee->description() . " + Milk";
    }
}
