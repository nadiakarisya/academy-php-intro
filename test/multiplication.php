<?php

class MultiplicationTest extends PHPUnit_Framework_TestCase
{
    public function testNaN() {
        $_REQUEST['x'] = "a";
        $_REQUEST['y'] = 1;
        $this->expectOutputString("", include(__DIR__ . '/../src/multiplication.php'));

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = "a";
        $this->expectOutputString("", include(__DIR__ . '/../src/multiplication.php'));

        $_REQUEST['x'] = "a";
        $_REQUEST['y'] = "b";
        $this->expectOutputString("", include(__DIR__ . '/../src/multiplication.php'));
    }

    public function testPositifKaliPositif() {
        $_REQUEST['x'] = 0;
        $_REQUEST['y'] = 1;
        $this->expectOutputString("0", include(__DIR__ . '/../src/multiplication.php'));

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = 0;
        $this->expectOutputString("0", include(__DIR__ . '/../src/multiplication.php'));

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = 1;

        $this->expectOutputString("1", include(__DIR__ . '/../src/multiplication.php'));
    }

    public function testMinusKaliPositif() {
        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = 10;

        $this->expectOutputString("-50", include(__DIR__ . '/../src/multiplication.php'));
    }

    public function testMinusKaliMinus() {
        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = -2;

        $this->expectOutputString("-10", include(__DIR__ . '/../src/multiplication.php'));
    }
}