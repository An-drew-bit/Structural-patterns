<?php

use adapter\{CircleAdapter, SquareAdapter};
use classes\{CircleAreaLib, SquareAreaLib};

function clientCodeCircle(CircleAreaLib $circle)
{
    echo $circle->getCircleArea(5);
}

function clientCodeSquare(SquareAreaLib $square)
{
    echo $square->getSquareArea(5);
}

$circle = new CircleAreaLib();
clientCodeCircle($circle);

$circleAdapter = new CircleAdapter($circle);
$circleAdapter->circleArea(5);

$square = new SquareAreaLib();
clientCodeSquare($square);

$squareAdapter = new SquareAdapter($square);
$squareAdapter->squareArea(5);