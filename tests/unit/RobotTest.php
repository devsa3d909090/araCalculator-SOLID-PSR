<?php

use \Src\Parser;
use \Src\Robot;

//extend php unit test frame work

class RobotTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
    }

    public function testRobotMoveRight()
    {
        $robot = new Robot;
        $robot->moveRight();
        $this->assertEquals($robot->getDirection(), "East");
    }


    public function testRobotMoveRight360Degree()
    {
        $robot = new Robot;
        $robot->moveRight();
        $robot->moveRight();
        $robot->moveRight();
        $robot->moveRight();

        $this->assertEquals($robot->getDirection(), "North");
    }

    public function testRobotMoveLeft360Degree()
    {
        $robot = new Robot;
        $robot->moveLeft();
        $robot->moveLeft();
        $robot->moveLeft();
        $robot->moveLeft();

        $this->assertEquals($robot->getDirection(), "North");
    }

    public function testTakeStepInAllDirection(){
        $robot = new Robot;
        $robot->moveLeft();
        $robot->walk();
        $robot->moveLeft();
        $robot->walk();
        $robot->moveLeft();
        $robot->walk();
        $robot->moveLeft();
        $robot->walk();
        $this->assertEquals($robot->getDirection(), "North");
    }

    public function testOrderExeRight()
    {
        $robot=new Robot;
        $robot->exe(['R']);
        $this->assertEquals($robot->getDirection(), "East");
    }


    public function testOrderExeLeft()
    {
        $robot=new Robot;
        $robot->exe(['L']);
        $this->assertEquals($robot->getDirection(), "West");
    }


    public function testOrderExeWalk()
    {
        $robot=new Robot;
        $robot->exe(['W']);
        $this->assertEquals($robot->getDirection(), "North");
    }

    public function testOrderExeDefault()
    {
        $robot=new Robot;
        $robot->exe(['G']);
        $this->assertEquals($robot->getDirection(), "North");
    }
    public function testRobotMoveLeft()
    {
        $robot = new Robot;
        $robot->moveLeft();
        $this->assertEquals($robot->getDirection(), "West");
    }


    public function testRobotIntialDirectionToNorth()
    {
        $robot = new Robot;
        $this->assertEquals($robot->getDirection(), "North");
    }

    public function testRobotMoveDirectionToSouth()
    {
        $robot = new Robot;
        $robot->moveRight();
        $robot->moveRight();
        $this->assertEquals($robot->getDirection(), "South");
    }

    public function testRobotIntialXAxisIsZero()
    {
        $robot = new Robot;
        $this->assertEquals($robot->getX(), 0);
    }

    public function testRobotIntialYAxisIsZero()
    {
        $robot = new Robot;
        $this->assertEquals($robot->getY(), 0);
    }

    public function testUnreachableSwitchCase()
    {
        $robot = new Robot;
        $robot->setDirectonForTesting();
        $robot->walk();
        $this->assertEquals($robot->getDirection(),'Lost');

    }
}
