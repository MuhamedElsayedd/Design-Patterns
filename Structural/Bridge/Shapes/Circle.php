<?php

namespace Structural\Bridge\Shapes;

class Circle extends Shape
{
    public function draw()
    {
        return "Drawing Circle in " . $this->color->applyColor();
    }
}
