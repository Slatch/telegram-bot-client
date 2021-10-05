<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class ChatLocation extends BaseEntity
{
    private Location $location;
    private string $address;

    public function __construct(array $payload)
    {
        $this->location = new Location($payload['location']);
        $this->address = $payload['address'] ?? null;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
}
