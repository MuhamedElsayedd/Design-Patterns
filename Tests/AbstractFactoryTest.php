<?php

namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCanCreateBMWcar()
    {
        $carFactory = new CarAbstractFactory(price: 200000);

        $mycar = $carFactory->createBMWCar();

        $this->assertInstanceOf(BMWCar::class, $mycar);
    }

    public function testCanCreateBenzcar()
    {
        $carFactory = new CarAbstractFactory(price: 120000);

        $mybenzCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class, $mybenzCar);
    }
}
