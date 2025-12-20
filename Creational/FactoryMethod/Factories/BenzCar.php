<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Products\BenzCar;
use Creational\FactoryMethod\Interfaces\CarInterface;

class BenzFactory extends CarFactory
{
    public function createCar(): CarInterface
    {
        return new BenzCar();
    }
}
