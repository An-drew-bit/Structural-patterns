<?php

namespace components;

use interfaces\INotifications;

class MessageNotifications implements INotifications
{
    public function message() : string
    {
        return "MessageNotifications";
    }
}