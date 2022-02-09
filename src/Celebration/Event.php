<?php
namespace Braddle\Celebration;

interface Event
{
    public function getYears(): int;
    public function getType(): string;

}