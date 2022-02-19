<?php

namespace adapter;

use classes\SquareAreaLib;
use interfaces\ISquare;

class SquareAdapter implements ISquare
{
    protected $squareAreaLib;

    public function __construct(SquareAreaLib $squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    public function squareArea(int $sideSquare)
    {
        return $this->squareAreaLib->getSquareArea($sideSquare);
    }
}