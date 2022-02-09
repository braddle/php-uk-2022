<?php

namespace Braddle\Celebration;

interface EventRetriever
{
    /**
     * @throws NoEventFoundException
     */
    public function getEvent(Person $person): Event;
}