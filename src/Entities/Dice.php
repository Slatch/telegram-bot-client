<?php

namespace Slatch\TelegramBotClient\Entities;

class Dice extends BaseEntity
{
    private string $emoji;
    private int $value;

    public function __construct(array $payload)
    {
        $this->emoji = $payload['emoji'];
        $this->value = $payload['value'];
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
