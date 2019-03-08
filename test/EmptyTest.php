<?php

class EmptyTest extends \PHPUnit\Framework\TestCase
{

    /**
     * $var = 1
     */
    public function test_empty1()
    {
        $var = 1;
        $this->assertFalse(empty($var));
    }

    /**
     * $var = [1]
     */
    public function test_empty2()
    {
        $var = [1];
        $this->assertFalse(empty($var));
    }

    /**
     * $var = ''
     */
    public function test_empty3()
    {
        $var = '';
        $this->assertTrue(empty($var));
    }

    /**
     * $var = '0'
     */
    public function test_empty4()
    {
        $var = '0';
        $this->assertTrue(empty($var));
    }

    /**
     * $var = 0
     */
    public function test_empty5()
    {
        $var = 0;
        $this->assertTrue(empty($var));
    }

    /**
     * $var = []
     */
    public function test_empty6()
    {
        $var = [];
        $this->assertTrue(empty($var));
    }

    /**
     * $var = false
     */
    public function test_empty7()
    {
        $var = false;
        $this->assertTrue(empty($var));
    }

    /**
     * $var = NULL
     */
    public function test_empty8()
    {
        $var = NULL;
        $this->assertTrue(empty($var));
    }

    /**
     * $var
     */
    public function test_empty9()
    {
        $this->assertTrue(empty($this->var));
    }

    /**
     * $var = 1
     */
    public function test_empty1_1()
    {
        $var = 1;
        $this->assertTrue(!empty($var));
    }

    /**
     * $var = [1]
     */
    public function test_empty2_1()
    {
        $var = [1];
        $this->assertTrue(!empty($var));
    }

    /**
     * $var = ''
     */
    public function test_empty3_1()
    {
        $var = '';
        $this->assertFalse(!empty($var));
    }

    /**
     * $var = '0'
     */
    public function test_empty4_1()
    {
        $var = '0';
        $this->assertFalse(!empty($var));
    }

    /**
     * $var = 0
     */
    public function test_empty5_1()
    {
        $var = 0;
        $this->assertFalse(!empty($var));
    }

    /**
     * $var = []
     */
    public function test_empty6_1()
    {
        $var = [];
        $this->assertFalse(!empty($var));
    }

    /**
     * $var = false
     */
    public function test_empty7_1()
    {
        $var = false;
        $this->assertFalse(!empty($var));
    }

    /**
     * $var = NULL
     */
    public function test_empty8_1()
    {
        $var = NULL;
        $this->assertFalse(!empty($var));
    }

    /**
     * $var
     */
    public function test_empty9_1()
    {
        $this->assertFalse(empty($this->var));
    }
}