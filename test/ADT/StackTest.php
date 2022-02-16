<?php
namespace Braddle\ADT;

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{

    private $empty, $one, $three;
    protected function setUp() : void
    {
        parent::setUp();

        $this->empty = new Stack();

        $this->one = new Stack();
        $this->one->push("pop");

        $this->three = new Stack();
        $this->three->push("snap");
        $this->three->push("crackle");
        $this->three->push("pop");
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->empty->isEmpty());
    }

    public function testNotEmpty()
    {
        $this->assertFalse($this->one->isEmpty());
    }

    public function testSize()
    {
        $this->assertEquals(0, $this->empty->size());
        $this->assertEquals(1, $this->one->size());
        $this->assertEquals(3, $this->three->size());
    }

    public function testSinglePop()
    {
        $this->assertEquals("pop", $this->one->pop());
        $this->assertTrue($this->one->isEmpty());
        $this->assertEquals(0, $this->one->size());
    }

    public function testMultiPop()
    {
        $this->assertEquals("pop", $this->three->pop());
        $this->assertEquals(2, $this->three->size());

        $this->assertEquals("crackle", $this->three->pop());
        $this->assertEquals(1, $this->three->size());

        $this->assertEquals("snap", $this->three->pop());
        $this->assertEquals(0, $this->three->size());
        $this->assertTrue($this->three->isEmpty());
    }
}