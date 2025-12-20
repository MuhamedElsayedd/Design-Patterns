<?php

namespace Creational\Builder;

use Creational\Builder\Models\BENZcar;

class BENZCarBuilder implements CarBuilderInterface
{
    private $type;

    public function createCar()
    {
        $this->type = new BENZcar();
    }

    public function addBody()
    {
        $this->type->setPart('body', 'Steel Body');
    }

    public function addDoors()
    {
        $this->type->setPart('doors', 4);
    }

    public function addEngine()
    {
        $this->type->setPart('engine', 'V8 Engine');
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
