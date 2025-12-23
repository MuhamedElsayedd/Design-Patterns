<?php

use Structural\Bridge\Shapes\Circle;
use Structural\Bridge\Shapes\Square;
use Structural\Bridge\Colors\RedColor;
use Structural\Bridge\Colors\BlueColor;

$redCircle = new Circle(new RedColor());
echo $redCircle->draw() . PHP_EOL;

$blueSquare = new Square(new BlueColor());
echo $blueSquare->draw() . PHP_EOL;
