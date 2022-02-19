<?php

namespace decorators;

class EmailDecorator extends Decorator
{
    public function message(): string
    {
        return "EmailDecorator(" . parent::message() . ")";
    }
}