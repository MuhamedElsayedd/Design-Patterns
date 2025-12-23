<?php

use Structural\Facade\Facade\ShopFacade;

$shop = new ShopFacade();
$result = $shop->processOrder("Mohamed", "Laptop", 1, 1000);

print_r($result);

// كدا احن عملنا سيستم وخفينا التفاصيل الداخلية عن المستخدم عشان هو هيتعامل بس مع ال Facade