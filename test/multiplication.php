<?php

class MultiplicationTest extends PHPUnit_Framework_TestCase
{
    public function testNaN() {
        $_REQUEST['x'] = "a";
        $_REQUEST['y'] = 1;
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("");

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = "a";
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("");

        $_REQUEST['x'] = "a";
        $_REQUEST['y'] = "b";
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("");
    }

    public function testNol(){
        $_REQUEST['x'] = 0;
        $_REQUEST['y'] = 1;
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("0");

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = 0;
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("0");
    }

    public function testPositifKaliPositif() {
        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = 1;
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("1");

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = 1;
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("1");
    }

    public function testMinusKaliPositif() {
        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = 10;
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("-50");

        $_REQUEST['x'] = 10;
        $_REQUEST['y'] = -5;
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("-50");
    }

    public function testMinusKaliMinus() {
        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = -2;
        include(__DIR__ . '/../src/multiplication.php');
        $this->expectOutputString("10");
    }
}