<?php

namespace Structural\Facade\Subsystem;

class Inventory
{
    public function updateStock($item, $quantity)
    {
        return "Update $item stock by $quantity";
    }
}
