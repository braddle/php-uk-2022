<?php
namespace Braddle\Mutation;

class MyInt
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function equals(MyInt $other) : bool
    {
        return $this->value == $other->value;
    }

    public function greaterThan(MyInt $other) : bool
    {
        return $this->value > $other->value;
    }

    public function lessThan(MyInt $other) : bool
    {
        return $this->value < $other->value;
    }
}