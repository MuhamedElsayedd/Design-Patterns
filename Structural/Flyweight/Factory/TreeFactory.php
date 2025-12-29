<?php

namespace Structural\Flyweight\Factory;

use Structural\Flyweight\ConcreteFlyweight\ConcreteTreeType;
use Structural\Flyweight\Flyweight\TreeType;

class TreeFactory
{
    private static array $treeTypes = [];

    public static function getTreeType(
        string $type,
        string $color,
        string $texture
    ): TreeType {
        $key = $type . '_' . $color . '_' . $texture;

        if (!isset(self::$treeTypes[$key])) {
            self::$treeTypes[$key] = new ConcreteTreeType($type, $color, $texture);
        }

        return self::$treeTypes[$key];
    }
}
