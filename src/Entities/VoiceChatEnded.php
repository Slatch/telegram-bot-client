<?php

namespace Slatch\TelegramBotClient\Entities;

class VoiceChatEnded extends BaseEntity
{
    private int $duration;

    public function __construct(array $payload)
    {
        $this->duration = $payload['duration'];
    }

    public function getDuration(): int
    {
        return $this->duration;
    }
}
