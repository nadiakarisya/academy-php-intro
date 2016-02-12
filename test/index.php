<?php

class Index extends PHPUnit_Framework_TestCase
{
    public function testOnePlusOne() {
        $this->assertEquals(1+1, include(__DIR__ . '/../src/index.php'));
    }
}