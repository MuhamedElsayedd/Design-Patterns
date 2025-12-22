<?php

require_once "Warrior.php";
require_once "Archer.php";
require_once "Mage.php";

use Creational\ProtoType\Warrior;
use Creational\ProtoType\Archer;
use Creational\ProtoType\Mage;

echo "\n=== Original Characters ===\n";

$warriorPrototype = new Warrior("Leonidas", "Warrior", "Sword");
echo $warriorPrototype->getInfo() . "\n";

$archerPrototype = new Archer("Robin Hood", "Archer", "Bow");
echo $archerPrototype->getInfo() . "\n";

$magePrototype = new Mage("Gandalf", "Mage", "Magic Staff");
echo $magePrototype->getInfo() . "\n";

echo "\n=== Cloned Characters ===\n";

// clone Warrior
$warrior1 = $warriorPrototype->copy();
$warrior1->name = "Achilles";

$warrior2 = $warriorPrototype->copy();
$warrior2->name = "Hector";

echo $warrior1->getInfo() . "\n";
echo $warrior2->getInfo() . "\n";

// clone Archer
$archer1 = $archerPrototype->copy();
$archer1->name = "Artemis";

echo $archer1->getInfo() . "\n";

// clone Mage
$mage1 = $magePrototype->copy();
$mage1->name = "Saruman";

echo $mage1->getInfo() . "\n";
