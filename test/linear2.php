<?php

class Linear2Test extends PHPUnit_Framework_TestCase
{
    public $file = __DIR__ . '/../src/linear2.php';

    public function testDummy() {
        include($this->file);
        $this->assertEquals(true, $this->hasOutput(), "Harus mengeluarkan output string");
        $this->expectOutputString("");
    }
}