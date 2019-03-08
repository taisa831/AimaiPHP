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
        $var = (object)[];
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
        $var = (object)[];
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

//    /**
//     * $var = object
//     */
//    public function test_isset2()
//    {
//        $var = (object)[];
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
        $var = (object)[];
        $this->assertTrue(is_null($var->func()));
    }

}