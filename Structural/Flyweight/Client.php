<?php

use Structural\Flyweight\Factory\TreeFactory;

// Trees with same intrinsic state
$tree1 = TreeFactory::getTreeType("Oak", "Green", "Rough");
$tree1->draw(10, 20);

$tree2 = TreeFactory::getTreeType("Oak", "Green", "Rough");
$tree2->draw(50, 70);

// Different intrinsic state
$tree3 = TreeFactory::getTreeType("Pine", "Dark Green", "Smooth");
$tree3->draw(15, 40);
