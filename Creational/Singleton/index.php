<?php

require_once "Database.php";

use Creational\Singleton\Database;

$db1 = Database::getInstance();
$db2 = Database::getInstance();

echo $db1->connection . "\n";

if ($db1 === $db2) {
    echo "Same instance\n";
} else {
    echo "Different instance\n";
}
