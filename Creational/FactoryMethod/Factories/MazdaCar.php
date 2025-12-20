<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Products\MazdaCar;
use Creational\FactoryMethod\Interfaces\CarInterface;

class MazdaFactory extends CarFactory
{
    public function createCar(): CarInterface
    {
        return new MazdaCar();
    }
}
