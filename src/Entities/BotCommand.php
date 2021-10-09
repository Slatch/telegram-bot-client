<?php

namespace Slatch\TelegramBotClient\Entities;

class BotCommand extends BaseEntity
{
    private string $command;
    private string $description;

    public function __construct(array $payload)
    {
        $this->command = $payload['command'];
        $this->description = $payload['description'];
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
