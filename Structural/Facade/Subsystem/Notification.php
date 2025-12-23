<?php

namespace Structural\Facade\Subsystem;

class Notification
{
    public function sendEmail($user, $message)
    {
        return "Email sent to $user : $message";
    }
}
