<?php

namespace Structural\Facade\Facade;

use Structural\Facade\Subsystem\Payment;
use Structural\Facade\Subsystem\Inventory;
use Structural\Facade\Subsystem\Notification;

class ShopFacade
{
    private Payment $payment;
    private Inventory $inventory;
    private Notification $notification;

    public function __construct()
    {
        $this->payment = new Payment();
        $this->inventory = new Inventory();
        $this->notification = new Notification();
    }

    public function processOrder($user, $item, $quantity, $amount)
    {
        $result = [];
        $result[] = $this->payment->pay($amount);
        $result[] = $this->inventory->updateStock($item, $quantity);
        $result[] = $this->notification->sendEmail($user, "Your order is confirmed!");
        return $result;
    }
}
