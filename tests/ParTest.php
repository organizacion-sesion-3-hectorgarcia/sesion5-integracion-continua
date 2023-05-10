<?php
use PHPUnit\Framework\TestCase;
require 'Par.php';

class CalculatorTest extends TestCase
{
    private $par;
 
    protected function setUp(): void
    {
        $this->par = new Par();
    }
 
    protected function tearDown(): void
    {
        $this->par = NULL;
    }
 
    public function test1(): void
    {
        $result = $this->calculator->par(10);
        $this->assertEquals(true, $result);
    }
 
    public function test2(): void
    {
        $result = $this->calculator->par(23);
        $this->assertEquals(false, $result);
    }
 
    public function test3(): void
    {
        $result = $this->calculator->par(11);
        $this->assertEquals(false, $result);
    }
 
    public function test4(): void
    {
        $result = $this->calculator->par(1235344);
        $this->assertEquals(true, $result);
    }

 
}
