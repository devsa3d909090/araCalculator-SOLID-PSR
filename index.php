<?php

require_once __DIR__ . '/vendor/autoload.php';

use \Src\AreaCalculator;
use \Src\SquarAreaCalculator;
use \Src\TriangleAreaCalculator;
use \Src\CircleAreaCalculator;


/**
*creating new object of SquarAreaCalculator with length = 10
*/
$square = new SquarAreaCalculator(10);
echo $square->getArea();

/**
*creating new object of TriangleAreaCalculator with width = 10 and height = 5
*/
$traingle = new TriangleAreaCalculator(10,5);
echo $traingle->getArea();

/**
*creating new object of CircleAreaCalculator with radius = 10
*/
$circle = new CircleAreaCalculator(10);
echo $circle->getArea();