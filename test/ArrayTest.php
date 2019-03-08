<?php

class ArrayTest extends \PHPUnit\Framework\TestCase
{

    /**
     * $var = []
     */
    public function test_var()
    {
        $var = [];
        $this->assertFalse($var[0]);
    }

    /**
     * $var = []
     */
    public function test_var2()
    {
        $var = [];
        $this->assertFalse($var['hoge']);
    }

    /**
     * $var = []
     */
    public function test_empty()
    {
        $var = [];
        $this->assertTrue(empty($var[0]));
    }

    /**
     * $var = []
     */
    public function test_empty2()
    {
        $var = [];
        $this->assertTrue(empty($var['hoge']));
    }

    /**
     * $var = []
     */
    public function test_isset()
    {
        $var = [];
        $this->assertFalse(isset($var[0]));
    }

    /**
     * $var = []
     */
    public function test_isset2()
    {
        $var = [];
        $this->assertFalse(isset($var['hoge']));
    }

    /**
     * $var = []
     */
    public function test_is_null()
    {
        $var = [];
        $this->assertFalse(is_null($var[0]));
    }

    /**
     * $var = []
     */
    public function test_is_null2()
    {
        $var = [];
        $this->assertFalse(is_null($var['hoge']));
    }

}