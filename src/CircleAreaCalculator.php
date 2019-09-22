<?php

namespace Src;

/**
*This class is responsible for Calculating area of the Circle Shapes
* @param  float radius
* @return void
*/

class CircleAreaCalculator implements AreaCalculatorInterface
{
    protected $area;
    public function __construct($radius) {
        $this->area = $radius * 3.14;
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
