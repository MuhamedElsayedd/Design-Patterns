<?php

namespace Structural\Bridge\Shapes;

use Structural\Bridge\Colors\ColorInterface;

abstract class Shape
{
    protected ColorInterface $color;

    public function __construct(ColorInterface $color)
    {
        $this->color = $color;
    }

    abstract public function draw();
}
