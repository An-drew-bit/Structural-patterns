<?php

namespace components;

use interfaces\INotifications;

class EmailNotifications implements INotifications
{
    public function message() : string
    {
        return "EmailNotifications";
    }
}