<?php

use \Src\Parser;

//extend php unit test frame work

class ParserTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
    }

    public function testTokenMatched()
    {
    	$Parser = new Parser;
    	$Parser->parse('R');
    	$this->assertEquals($Parser->getTokens()[0][0], "R");

    }
}