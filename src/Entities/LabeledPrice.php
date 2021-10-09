<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class LabeledPrice extends BaseEntity
{
    private string $label;
    private int $amount;

    public function __construct(array $payload)
    {
        $this->label = $payload['label'];
        $this->amount = $payload['amount'];
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}
