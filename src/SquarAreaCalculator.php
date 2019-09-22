<?php

namespace Src;

/**
*This class is responsible for Calculating area of the Squar Shapes
* @param  float length
* @return void
*/

class SquarAreaCalculator implements AreaCalculatorInterface
{
    protected $area;
    public function __construct($length) {
        $this->area = $length * $length;
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
