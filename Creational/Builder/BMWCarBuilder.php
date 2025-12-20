<?php

namespace Creational\Builder;

use Creational\Builder\Models\BENZcar;

class BMWCarBuilder implements CarBuilderInterface
{
    private $type;

    public function createCar()
    {
        $this->type = new BENZcar();
    }

    public function addBody()
    {
        $this->type->setPart('body', 'Carbon Fiber Body');
    }

    public function addDoors()
    {
        $this->type->setPart('doors', 2);
    }

    public function addEngine()
    {
        $this->type->setPart('engine', 'Twin Turbo Engine');
    }

    public function addWheel()
    {
        $this->type->setPart('wheels', 4);
    }

    public function getCar()
    {
        return $this->type;
    }
}
