<?php

namespace App\Project\Application\Events\PostCreationEvent;

use App\Project\Application\Events\AbstractEvent;
use App\Project\Application\Events\AbstractEventHandler;
use App\Project\Domain\EventHandlers\EventsEnum;

class PostCreationEventHandler extends AbstractEventHandler
{

    public function handle(PostCreationEvent|AbstractEvent $event): void
    {
        $this->eventPublisher->publish(
            EventsEnum::postCreated,
            $event->getPostAggregate()->toArray()
        );
        $this->logger->info('Событие: Post с id' . $event->getPostAggregate()->getId() . ' создан.');
    }
}