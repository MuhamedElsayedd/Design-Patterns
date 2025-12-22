<?php

namespace Creational\ProtoType;

use Creational\ProtoType\PrototypeInterface;

abstract class CharacterPrototype implements PrototypeInterface
{
    public $name;
    public $type;
    public $weapon;

    public function __construct($name, $type, $weapon)
    {
        $this->name   = $name;
        $this->type   = $type;
        $this->weapon = $weapon;
    }

    public function copy(): PrototypeInterface
    {
        return clone $this;
    }

    public function getInfo()
    {
        return "Name: $this->name | Type: $this->type | Weapon: $this->weapon";
    }
}
