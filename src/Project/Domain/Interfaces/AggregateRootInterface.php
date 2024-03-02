<?php

namespace App\Project\Domain\Interfaces;

interface AggregateRootInterface
{
    public function toArray(): array;
}