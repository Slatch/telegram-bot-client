<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class KeyboardButtonPollType extends BaseEntity
{
    private ?string $type;

    public function __construct(array $payload)
    {
        $this->type = $payload['type'] ?? null;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
