<?php

use decorators\{EmailDecorator, MessageDecorator, PushDecorator};
use components\{EmailNotifications, MessageNotifications, PushNotifications};
use interfaces\{INotifications};

function clientCode(INotifications $notifications)
{
    echo "Result: " . $notifications->message();
}

$simple1 = new EmailNotifications();
$simple2 = new MessageNotifications();
$simple3 = new PushNotifications();

echo "Client: I've got a simple component:\n";
clientCode($simple1);
clientCode($simple2);
clientCode($simple3);
echo "\n\n";

$decorator1 = new EmailDecorator($simple1);
$decorator2 = new MessageDecorator($decorator1);
$decorator3 = new PushDecorator($simple3);

echo "Client: Now I've got a decorated component:\n";
clientCode($decorator2);
clientCode($decorator3);