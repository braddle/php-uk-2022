<?php

namespace Braddle;

use Braddle\MyInt;
use PHPUnit\Framework\TestCase;

class MyIntTest extends TestCase
{
    public function testSameNumbersAreEqual()
    {
        $a = new MyInt(1);
        $b = new MyInt(1);

        $this->assertTrue($a->equals($b));

    }


}
