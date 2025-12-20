<?php

namespace Creational\FactoryMethod\Products;

use Creational\FactoryMethod\Interfaces\CarInterface;

class BMWCar implements CarInterface
{
    public function drive()
    {
        return "Driving A BMW Car 🚗";
    }
}
