<?php

namespace Structural\Flyweight\ConcreteFlyweight;

use Structural\Flyweight\Flyweight\TreeType;

class ConcreteTreeType implements TreeType
{
    private string $type;
    private string $color;
    private string $texture;

    public function __construct(string $type, string $color, string $texture)
    {
        $this->type    = $type;
        $this->color   = $color;
        $this->texture = $texture;
    }

    public function draw(int $x, int $y): void
    {
        echo "Draw {$this->type} tree at ($x, $y)" . PHP_EOL;
    }
}
