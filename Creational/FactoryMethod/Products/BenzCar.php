<?php

namespace Creational\FactoryMethod\Products;

use Creational\FactoryMethod\Interfaces\CarInterface;

class BenzCar implements CarInterface
{
    public function drive()
    {
        return "Driving a Benz car 🚗";
    }
}
