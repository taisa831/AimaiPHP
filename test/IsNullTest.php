<?php

class IsNullTest extends \PHPUnit\Framework\TestCase
{
    private $var;

    /**
     * $var = 1
     */
    public function test_is_null1()
    {
        $var = 1;
        $this->assertFalse(is_null($var));
    }

    /**
     * $var = [1]
     */
    public function test_is_null2()
    {
        $var = [1];
        $this->assertFalse(is_null($var));
    }

    /**
     * $var = ''
     */
    public function test_is_null3()
    {
        $var = '';
        $this->assertFalse(is_null($var));
    }

    /**
     * $var = '0'
     */
    public function test_is_null4()
    {
        $var = '0';
        $this->assertFalse(is_null($var));
    }

    /**
     * $var = 0
     */
    public function test_is_null5()
    {
        $var = 0;
        $this->assertFalse(is_null($var));
    }

    /**
     * $var = []
     */
    public function test_is_null6()
    {
        $var = [];
        $this->assertFalse(is_null($var));
    }

    /**
     * $var = false
     */
    public function test_is_null7()
    {
        $var = false;
        $this->assertFalse(is_null($var));
    }

    /**
     * $var = NULL
     */
    public function test_is_null8()
    {
        $var = NULL;
        $this->assertTrue(is_null($var));
    }

    /**
     * $var
     */
    public function test_is_null9()
    {
        $this->assertFalse($this->var);
    }

    /**
     * $var = 1
     */
    public function test_is_null1_1()
    {
        $var = 1;
        $this->assertTrue(!is_null($var));
    }

    /**
     * $var = [1]
     */
    public function test_is_null2_1()
    {
        $var = [1];
        $this->assertTrue(!is_null($var));
    }

    /**
     * $var = ''
     */
    public function test_is_null3_1()
    {
        $var = '';
        $this->assertTrue(!is_null($var));
    }

    /**
     * $var = '0'
     */
    public function test_is_null4_1()
    {
        $var = '0';
        $this->assertTrue(!is_null($var));
    }

    /**
     * $var = 0
     */
    public function test_is_null5_1()
    {
        $var = 0;
        $this->assertTrue(!is_null($var));
    }

    /**
     * $var = []
     */
    public function test_is_null6_1()
    {
        $var = [];
        $this->assertTrue(!is_null($var));
    }

    /**
     * $var = false
     */
    public function test_is_null7_1()
    {
        $var = false;
        $this->assertTrue(!is_null($var));
    }

    /**
     * $var = NULL
     */
    public function test_is_null8_1()
    {
        $var = NULL;
        $this->assertFalse(!is_null($var));
    }

    /**
     * $var
     */
    public function test_is_null9_1()
    {
        $this->assertTrue(!$this->var);
    }
}