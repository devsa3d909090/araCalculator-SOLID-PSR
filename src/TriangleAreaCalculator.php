<?php

namespace Src;

/**
*This class is responsible for Calculating area of the Triangle Shapes
*should pass two integer when intiating a new object which repesent width and height
* @param  float width
* @param  float height
* @return void
*/

class TriangleAreaCalculator implements AreaCalculatorInterface
{
    protected $area;
    public function __construct($width,$height) {
        $this->area = $width * $height *0.5;
    }

/**
*This fucntion return Squar Area when Called
* @return float
*/
    public function getArea() 
    {   
        return $this->area;
    }
}
