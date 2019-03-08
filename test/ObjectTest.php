<?php

class ObjectTest extends \PHPUnit\Framework\TestCase
{

    /**
     * $var = object
     */
    public function test_var()
    {
        $var = (object)[];
        $this->assertNull($var->var);
    }

    /**
     * $var = object
     */
    public function test_var2()
    {
        $var = null;
        $this->assertNull($var->var);
    }

    /**
     * $var = object
     */
    public function test_var3()
    {
        $var = (object)[];
        $this->assertFalse($var->func());
    }

    /**
     * $var = object
     */
    public function test_var4()
    {
        $var = null;
        $this->assertFalse($var->func());
    }

    /**
     * $var = object
     */
    public function test_empty()
    {
        $var = (object)[];
        $this->assertTrue(empty($var->var));
    }

    /**
     * $var = object
     */
    public function test_empty2()
    {
        $var = null;
        $this->assertTrue(empty($var->var));
    }

    /**
     * $var = object
     */
    public function test_empty3()
    {
        $var = (object)[];
        $this->assertTrue(empty($var->func()));
    }

    /**
     * $var = object
     */
    public function test_empty4()
    {
        $var = null;
        $this->assertTrue(empty($var->func()));
    }

    /**
     * $var = object
     */
    public function test_isset()
    {
        $var = (object)[];
        $this->assertFalse(isset($var->var));
    }

    /**
     * $var = object
     */
    public function test_isset2()
    {
        $var = null;
        $this->assertFalse(isset($var->var));
    }

//    /**
//     * $var = object
//     */
//    public function test_isset3()
//    {
//        $var = (object)[];
//        $this->assertFalse(isset($var->func()));
//    }

//    /**
//     * $var = object
//     */
//    public function test_isset4()
//    {
//        $var = null;
//        $this->assertFalse(isset($var->func()));
//    }

    /**
     * $var = object
     */
    public function test_is_null()
    {
        $var = (object)[];
        $this->assertTrue(is_null($var->var));
    }

    /**
     * $var = object
     */
    public function test_is_null2()
    {
        $var = null;
        $this->assertTrue(is_null($var->var));
    }

    /**
     * $var = object
     */
    public function test_is_null3()
    {
        $var = (object)[];
        $this->assertTrue(is_null($var->func()));
    }

    /**
     * $var = object
     */
    public function test_is_null4()
    {
        $var = null;
        $this->assertTrue(is_null($var->func()));
    }

}