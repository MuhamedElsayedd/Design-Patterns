<?php

use Structural\Decorator\Concrete\SimpleCoffee;
use Structural\Decorator\Decorator\MilkDecorator;
use Structural\Decorator\Decorator\SugarDecorator;

$coffee = new SimpleCoffee();
$coffee = new MilkDecorator($coffee);
$coffee = new SugarDecorator($coffee);

echo $coffee->description(); // Simple Coffee + Milk + Sugar
echo PHP_EOL;
echo $coffee->cost();        // 15
