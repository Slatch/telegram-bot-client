<?php

namespace Slatch\TelegramBotClient\Entities;

class VoiceChatScheduled extends BaseEntity
{
    private int $startDate;

    public function __construct(array $payload)
    {
        $this->startDate = $payload['start_date'];
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }
}
