<?php

class IssetTest extends \PHPUnit\Framework\TestCase
{
    private $var;

    /**
     * $var = 1
     */
    public function test_isset1()
    {
        $var = 1;
        $this->assertTrue(isset($var));
    }

    /**
     * $var = [1]
     */
    public function test_isset2()
    {
        $var = [1];
        $this->assertTrue(isset($var));
    }

    /**
     * $var = ''
     */
    public function test_isset3()
    {
        $var = '';
        $this->assertTrue(isset($var));
    }

    /**
     * $var = '0'
     */
    public function test_isset4()
    {
        $var = '0';
        $this->assertTrue(isset($var));
    }

    /**
     * $var = 0
     */
    public function test_isset5()
    {
        $var = 0;
        $this->assertTrue(isset($var));
    }

    /**
     * $var = []
     */
    public function test_isset6()
    {
        $var = [];
        $this->assertTrue(isset($var));
    }

    /**
     * $var = false
     */
    public function test_isset7()
    {
        $var = false;
        $this->assertTrue(isset($var));
    }

    /**
     * $var = NULL
     */
    public function test_isset8()
    {
        $var = NULL;
        $this->assertFalse(isset($var));
    }

    /**
     * $var
     */
    public function test_isset9()
    {
        $this->assertFalse(isset($this->var));
    }

    /**
     * $var = 1
     */
    public function test_isset1_1()
    {
        $var = 1;
        $this->assertFalse(!isset($var));
    }

    /**
     * $var = [1]
     */
    public function test_isset2_1()
    {
        $var = [1];
        $this->assertFalse(!isset($var));
    }

    /**
     * $var = ''
     */
    public function test_isset3_1()
    {
        $var = '';
        $this->assertFalse(!isset($var));
    }

    /**
     * $var = '0'
     */
    public function test_isset4_1()
    {
        $var = '0';
        $this->assertFalse(!isset($var));
    }

    /**
     * $var = 0
     */
    public function test_isset5_1()
    {
        $var = 0;
        $this->assertFalse(!isset($var));
    }

    /**
     * $var = []
     */
    public function test_isset6_1()
    {
        $var = [];
        $this->assertFalse(!isset($var));
    }

    /**
     * $var = false
     */
    public function test_isset7_1()
    {
        $var = false;
        $this->assertFalse(!isset($var));
    }

    /**
     * $var = NULL
     */
    public function test_isset8_1()
    {
        $var = NULL;
        $this->assertTrue(!isset($var));
    }

    /**
     * $var
     */
    public function test_isset9_1()
    {
        $this->assertTrue(!isset($this->var));
    }
}