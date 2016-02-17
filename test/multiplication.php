<?php

class MultiplicationTest extends PHPUnit_Framework_TestCase
{
    public $file = __DIR__ . '/../src/multiplication.php';
    
    public function testDummy() {
        include($this->file);
        $this->assertEquals(true, $this->hasOutput(), "Harus mengeluarkan output string");
        $this->expectOutputString("");
    }

    public function testBukanAngka() {
        $_REQUEST['x'] = "a";
        $_REQUEST['y'] = 1;
        include($this->file);
        $this->expectOutputString("");

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = "a";
        include($this->file);
        $this->expectOutputString("");

        $_REQUEST['x'] = "a";
        $_REQUEST['y'] = "b";
        include($this->file);
        $this->expectOutputString("");
    }

    public function testNol(){
        $_REQUEST['x'] = 0;
        $_REQUEST['y'] = 1;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = 0;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));
    }

    public function testPositifKaliPositif() {
        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = 1;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = 1;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));
    }

    public function testMinusKaliPositif() {
        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = 10;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = 10;
        $_REQUEST['y'] = -5;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));
    }

    public function testMinusKaliMinus() {
        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = -2;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));
    }

    public function testDecimal() {
        $_REQUEST['x'] = 1.4;
        $_REQUEST['y'] = 2.7;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = -1.4;
        $_REQUEST['y'] = 2.7;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = 1.4;
        $_REQUEST['y'] = -2.7;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = -1.4;
        $_REQUEST['y'] = -2.7;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));
    }

    public function testFloatingNumber() {
        $_REQUEST['x'] = 4;
        $_REQUEST['y'] = 1e2;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = 4;
        $_REQUEST['y'] = -1e2;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = 1e2;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = 5;
        $_REQUEST['y'] = -1e2;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = 1e2;
        $_REQUEST['y'] = 1e2;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = -1e2;
        $_REQUEST['y'] = 1e2;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));

        $_REQUEST['x'] = 1e2;
        $_REQUEST['y'] = -1e2;
        include($this->file);
        $this->expectOutputString(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])));
    }
}