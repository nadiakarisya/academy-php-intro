<?php

class MultiplicationTest extends PHPUnit_Framework_TestCase
{
    public function include_file(){
        ob_start();
        include(__DIR__ . '/../src/multiplication.php');
        return ob_get_clean();
    }
    
    public function testDummy() {
        $output = $this->include_file();
        $this->assertEquals("", $output, "Parameter tidak diset, harus mengeluarkan string kosong");
    }

    public function testBukanAngka() {
        $_REQUEST['x'] = "a";
        $_REQUEST['y'] = 1;
        $output = $this->include_file();
        $this->assertEquals("", $output, "Parameter x bukan angka, harus mengeluarkan string kosong");

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = "a";
        $output = $this->include_file();
        $this->assertEquals("", $output, "Parameter y bukan angka, harus mengeluarkan string kosong");

        $_REQUEST['x'] = "a";
        $_REQUEST['y'] = "b";
        $output = $this->include_file();
        $this->assertEquals("", $output, "Parameter x dan y bukan angka, harus mengeluarkan string kosong");
    }

    public function testNol(){
        $_REQUEST['x'] = 0;
        $_REQUEST['y'] = 1;
        $output = $this->include_file();
        $this->assertEquals("0", $output, "Parameter x 0, harus mengeluarkan string 0");

        $_REQUEST['x'] = 1;
        $_REQUEST['y'] = 0;
        $output = $this->include_file();
        $this->assertEquals("0", $output, "Parameter y 0, harus mengeluarkan string 0");

        $_REQUEST['x'] = 0;
        $_REQUEST['y'] = 0;
        $output = $this->include_file();
        $this->assertEquals("0", $output, "Parameter x dan y 0, harus mengeluarkan string 0");
    }

    public function testPositifKaliPositif() {
        $_REQUEST['x'] = 5;
        $_REQUEST['y'] = 5;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 5x5");

        $_REQUEST['x'] = 999999999999999;
        $_REQUEST['y'] = 999999999999999;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 999999999999999x999999999999999");
    }

    public function testMinusKaliPositif() {
        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = 10;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian -5x10");

        $_REQUEST['x'] = 10;
        $_REQUEST['y'] = -5;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 10x-5");
    }

    public function testMinusKaliMinus() {
        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = -2;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian -5x-2");
    }

    public function testDecimal() {
        $_REQUEST['x'] = 1.4;
        $_REQUEST['y'] = 2.7;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 1.4x2.7");

        $_REQUEST['x'] = -1.4;
        $_REQUEST['y'] = 2.7;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian -1.4x2.7");

        $_REQUEST['x'] = 1.4;
        $_REQUEST['y'] = -2.7;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 1.4x-2.7");

        $_REQUEST['x'] = -1.4;
        $_REQUEST['y'] = -2.7;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian -1.4x-2.7");
    }

    public function testFloatingNumber() {
        $_REQUEST['x'] = 4;
        $_REQUEST['y'] = 1e2;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 4x1e2");

        $_REQUEST['x'] = 4;
        $_REQUEST['y'] = -1e2;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 4x-1e2");

        $_REQUEST['x'] = -5;
        $_REQUEST['y'] = 1e2;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian -5x1e2");

        $_REQUEST['x'] = 5;
        $_REQUEST['y'] = -1e2;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 5x1e2");

        $_REQUEST['x'] = 1e2;
        $_REQUEST['y'] = 1e2;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 1e2x1e2");

        $_REQUEST['x'] = -1e2;
        $_REQUEST['y'] = 1e2;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian -1e2x1e2");

        $_REQUEST['x'] = 1e2;
        $_REQUEST['y'] = -1e2;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian 1e2x-1e2");

        $_REQUEST['x'] = -1e2;
        $_REQUEST['y'] = -1e2;
        $output = $this->include_file();
        $this->assertEquals(strval(intval($_REQUEST['x']) * intval($_REQUEST['y'])), $output, "Perkalian -1e2x-1e2");
    }
}