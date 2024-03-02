<?php

namespace App\Project\Domain\EventHandlers;

interface EventPublisherInterface
{
    function publish(EventsEnum $event, $message): void;
}