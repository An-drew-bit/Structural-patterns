<?php

namespace decorators;

use interfaces\INotifications;

abstract class Decorator implements INotifications
{
    /**
     * @var INotifications
     */
    protected $notifications;

    public function __construct(INotifications $notifications)
    {
        $this->notifications = $notifications;
    }

    public function message(): string
    {
        return $this->notifications->message();
    }
}