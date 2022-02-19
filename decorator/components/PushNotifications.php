<?php

namespace components;

use interfaces\INotifications;

class PushNotifications implements INotifications
{
    public function message() : string
    {
        return "PushNotifications";
    }
}