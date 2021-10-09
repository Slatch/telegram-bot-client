<?php

namespace Slatch\TelegramBotClient\Entities;

class ProximityAlertTriggered extends BaseEntity
{
    private User $traveler;
    private User $watcher;
    private int $distance;

    public function __construct(array $payload)
    {
        $this->traveler = new User($payload['traveler']);
        $this->watcher = new User($payload['watcher']);
        $this->distance = $payload['distance'];
    }

    public function getTraveler(): User
    {
        return $this->traveler;
    }

    public function getWatcher(): User
    {
        return $this->watcher;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
