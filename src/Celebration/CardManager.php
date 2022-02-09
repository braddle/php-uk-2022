<?php
namespace Braddle\Celebration;

class CardManager
{

    private EventRetriever $eventRetriever;
    private Sender $sender;

    public function __construct(EventRetriever $eventRetriever, Sender $sender)
    {
        $this->eventRetriever = $eventRetriever;
        $this->sender = $sender;
    }

    public function sendCelebration(Person $person) : void
    {

    }
}