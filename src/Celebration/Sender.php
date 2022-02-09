<?php
namespace Braddle\Celebration;

interface Sender
{
    public function send(string $name, string email, string $template);
}