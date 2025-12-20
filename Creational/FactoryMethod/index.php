<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Creational\FactoryMethod\Factories\BenzFactory;
use Creational\FactoryMethod\Factories\BMWFactory;
use Creational\FactoryMethod\Factories\MazdaFactory;

function deliver($factory)
{
    echo $factory->deliverCar() . PHP_EOL;
}

deliver(new BenzFactory());
deliver(new BMWFactory());
deliver(new MazdaFactory());

// Here you just define the factory, and then create a car according to its type, and that's it.