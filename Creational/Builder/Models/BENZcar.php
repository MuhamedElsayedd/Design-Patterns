<?php

namespace Creational\Builder\Models;


class BENZcar
{
    private $data = [];

    public function setPart($name, $value)
    {
        $this->data[$name] = $value;
    }
}
