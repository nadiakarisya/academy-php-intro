<?php

class PrimeTest extends PHPUnit_Framework_TestCase
{
    public function include_file(){
        ob_start();
        include(__DIR__ . '/../src/prime.php');
        return ob_get_clean();
    }

    public function testDummy() {
        $output = $this->include_file();
        $this->assertEquals("", $output, "Parameter tidak diset, harus mengeluarkan string kosong");
    }

    public function testBukanAngka() {
        $_REQUEST['n'] = 'a';
        $output = $this->include_file();
        $this->assertEquals("", $output, "Parameter bukan angka, harus mengeluarkan string kosong");
    }

    public function testBilanganPrima() {
        $_REQUEST['n'] = '3';
        $output = $this->include_file();
        $this->assertEquals("true", $output, "Parameter 3 bilangan prima, harus mengeluarkan string true");

        $_REQUEST['n'] = '2';
        $output = $this->include_file();
        $this->assertEquals("true", $output, "Parameter 2 bilangan prima, harus mengeluarkan string true");

        $_REQUEST['n'] = pow(2, 57885161)-1;
        $output = $this->include_file();
        $this->assertEquals("true", $output, "Parameter 2^57885161 bilangan prima, harus mengeluarkan string true");
    }

    public function testBukanBilanganPrima() {
        $_REQUEST['n'] = '-10';
        $output = $this->include_file();
        $this->assertEquals("false", $output, "Parameter -10 bukan bilangan prima, harus mengeluarkan string false");

        $_REQUEST['n'] = '0';
        $output = $this->include_file();
        $this->assertEquals("false", $output, "Parameter 0 bukan bilangan prima, harus mengeluarkan string false");

        $_REQUEST['n'] = '1';
        $output = $this->include_file();
        $this->assertEquals("false", $output, "Parameter 1 bukan bilangan prima, harus mengeluarkan string false");

        $_REQUEST['n'] = '4';
        $output = $this->include_file();
        $this->assertEquals("false", $output, "Parameter 4 bukan bilangan prima, harus mengeluarkan string false");
    }
}