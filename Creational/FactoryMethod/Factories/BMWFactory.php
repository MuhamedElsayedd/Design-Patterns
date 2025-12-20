<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Products\BMWCar;
use Creational\FactoryMethod\Interfaces\CarInterface;

class BMWFactory extends CarFactory
{
    public function createCar(): CarInterface
    {
        return new BMWCar();
    }
}
