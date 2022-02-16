<?php
namespace Braddle\ADT;

class Stack
{
    private $size = 0;
    private $value = [];

    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function push(string $input)
    {
        $this->value[$this->size++] = $input;
    }

    public function size() : int
    {
        return $this->size;
    }

    public function pop()
    {
        return $this->value[--$this->size];
    }
}