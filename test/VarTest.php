<?php

class VarTest extends \PHPUnit\Framework\TestCase
{
    private $var;

    /**
     * $var = 1
     */
    public function test_var1()
    {
        $var = 1;
        $result = $var ? true : false;
        $this->assertTrue($result);
    }

    /**
     * $var = [1]
     */
    public function test_var2()
    {
        $var = [1];
        $result = $var ? true : false;
        $this->assertTrue($result);
    }

    /**
     * $var = ''
     */
    public function test_var3()
    {
        $var = '';
        $result = $var ? true : false;
        $this->assertFalse($result);
    }

    /**
     * $var = '0'
     */
    public function test_var4()
    {
        $var = '0';
        $result = $var ? true : false;
        $this->assertFalse($result);
    }

    /**
     * $var = 0
     */
    public function test_var5()
    {
        $var = '';
        $result = $var ? true : false;
        $this->assertFalse($result);
    }

    /**
     * $var = [[
     */
    public function test_var6()
    {
        $var = [];
        $result = $var ? true : false;
        $this->assertFalse($result);
    }

    /**
     * $var = false
     */
    public function test_var7()
    {
        $var = false;
        $result = $var ? true : false;
        $this->assertFalse($result);
    }

    /**
     * $var = NULL
     */
    public function test_var8()
    {
        $var = NULL;
        $result = $var ? true : false;
        $this->assertFalse($result);
    }

    /**
     * $var
     */
    public function test_var9()
    {
        $this->assertFalse($this->var);
    }

    /**
     * $var = 1
     */
    public function test_var1_1()
    {
        $var = 1;
        $result = !$var ? true : false;
        $this->assertFalse($result);
    }

    /**
     * $var = [1]
     */
    public function test_var2_1()
    {
        $var = [1];
        $result = !$var ? true : false;
        $this->assertFalse($result);
    }

    /**
     * $var = ''
     */
    public function test_var3_1()
    {
        $var = '';
        $result = !$var ? true : false;
        $this->assertTrue($result);
    }

    /**
     * $var = '0'
     */
    public function test_var4_1()
    {
        $var = '0';
        $result = !$var ? true : false;
        $this->assertTrue($result);
    }

    /**
     * $var = 0
     */
    public function test_var5_1()
    {
        $var = '';
        $result = !$var ? true : false;
        $this->assertTrue($result);
    }

    /**
     * $var = [[
     */
    public function test_var6_1()
    {
        $var = [];
        $result = !$var ? true : false;
        $this->assertTrue($result);
    }

    /**
     * $var = false
     */
    public function test_var7_1()
    {
        $var = false;
        $result = !$var ? true : false;
        $this->assertTrue($result);
    }

    /**
     * $var = NULL
     */
    public function test_var8_1()
    {
        $var = NULL;
        $result = !$var ? true : false;
        $this->assertTrue($result);
    }

    /**
     * $var
     */
    public function test_var9_1()
    {
        $this->assertTrue(!$this->var);
    }

}