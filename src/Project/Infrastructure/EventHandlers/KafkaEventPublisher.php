<?php

namespace App\Project\Infrastructure\EventHandlers;

use App\Project\Domain\EventHandlers\EventPublisherInterface;
use App\Project\Domain\EventHandlers\EventsEnum;

class KafkaEventPublisher implements EventPublisherInterface
{

    function publish(EventsEnum $event, $message): void
    {
        // TODO: Implement publish() method.
    }
}