<?php

namespace decorators;

class PushDecorator extends Decorator
{
    public function message(): string
    {
        return "PushDecorator(" . parent::message() . ")";
    }
}