<?php

class ReverseTest extends PHPUnit_Framework_TestCase
{
    public $file = __DIR__ . '/../src/reverse.php';

    public function testDummy() {
        include($this->file);
        $this->assertEquals(true, $this->hasOutput(), "Harus mengeluarkan output string");
        $this->expectOutputString("");
    }
}