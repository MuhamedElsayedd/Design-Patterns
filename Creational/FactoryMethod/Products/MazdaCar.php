<?php

namespace Creational\FactoryMethod\Products;

use Creational\FactoryMethod\Interfaces\CarInterface;

class MazdaCar implements CarInterface
{
    public function drive()
    {
        return "Driving a Mazda Car 🚗";
    }
}
