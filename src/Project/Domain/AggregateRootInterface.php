<?php

namespace App\Project\Domain;

interface AggregateRootInterface
{
    public function toArray(): array;
}