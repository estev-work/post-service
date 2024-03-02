<?php

namespace App\Project\Infrastructure\EventHandlers;

use App\Project\Domain\EventHandlers\EventPublisherInterface;
use App\Project\Domain\EventHandlers\EventsEnum;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class KafkaEventPublisher implements EventPublisherInterface
{
    protected LoggerInterface $logger;

    public function __construct()
    {
        $this->logger = new Logger(self::class);
    }

    public function publish(EventsEnum $event, $message): void
    {
        $this->logger->debug('!!!!!!!!!!');
    }
}