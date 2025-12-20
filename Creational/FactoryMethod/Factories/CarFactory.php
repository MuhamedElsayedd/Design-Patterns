<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Interfaces\CarInterface;

abstract class CarFactory
{
    abstract public function createCar(): CarInterface;

    public function deliverCar()
    {
        $car = $this->createCar();
        return $car->drive();
    }
}
