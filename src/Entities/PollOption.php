<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class PollOption extends BaseEntity
{
    private string $text;
    private int $voterCount;

    public function __construct(array $payload)
    {
        $this->text = $payload['text'];
        $this->voterCount = $payload['voter_count'];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getVoterCount(): int
    {
        return $this->voterCount;
    }
}
