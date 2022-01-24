<?php
namespace Braddle\Mutation;

use PHPUnit\Framework\TestCase;

class MyIntTest extends TestCase
{
    private $one;
    private $two;

    protected function setUp() : void
    {
        parent::setUp();

        $this->one = new MyInt(1);
        $this->two = new MyInt(2);
    }

    public function testSameNumbersAreEqual()
    {
        $this->assertTrue($this->one->equals($this->one));
    }

    public function testDifferenceNumbersAreNotEqual()
    {
        $this->assertFalse($this->one->equals($this->two));
    }

    public function testBiggerNumberIsGreaterThanSmall()
    {

        $this->assertTrue($this->two->greaterThan($this->one));
    }

    public function testSmallerNumberIsNotGreaterThanBigger()
    {
        $this->assertFalse($this->one->greaterThan($this->two));
    }

    public function testSmallerNumberInLessThanBigger()
    {
        $this->assertTrue($this->one->lessThan($this->two));
    }

    public function testBiggerNumberInNotLessThanSmaller()
    {
        $this->assertFalse($this->two->lessThan($this->one));
    }
}
