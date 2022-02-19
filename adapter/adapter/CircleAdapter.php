<?php

namespace adapter;

use classes\CircleAreaLib;
use interfaces\ICircle;

class CircleAdapter implements ICircle
{
    protected $circleAreaLib;

    public function __construct(CircleAreaLib $circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    public function circleArea(int $circumference)
    {
        return $this->circleAreaLib->getCircleArea($circumference);
    }
}