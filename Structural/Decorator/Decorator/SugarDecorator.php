<?php

namespace Structural\Decorator\Decorator;

class SugarDecorator extends CoffeeDecorator
{
    public function cost(): float
    {
        return $this->coffee->cost() + 2;
    }

    public function description(): string
    {
        return $this->coffee->description() . " + Sugar";
    }
}
