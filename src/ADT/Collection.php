<?php
namespace Braddle\ADT;

interface Collection
{
    public function isEmpty() : bool;

    public function size() : int;

    public function push(string $value) : void;

    public function pop() : string;
}