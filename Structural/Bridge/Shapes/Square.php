<?php

namespace Structural\Bridge\Shapes;

class Square extends Shape
{
    public function draw()
    {
        return "Drawing Square in " . $this->color->applyColor();
    }
}
