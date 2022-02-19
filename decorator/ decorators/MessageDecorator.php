<?php

namespace decorators;

class MessageDecorator extends Decorator
{
    public function message(): string
    {
        return "MessageDecorator(" . parent::message() . ")";
    }
}