<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class ForceReply extends BaseEntity
{
    private bool $forceReply;
    private ?string $inputFieldPlaceholder;
    private ?bool $selective;

    public function __construct(array $payload)
    {
        $this->forceReply = $payload['force_reply'];
        $this->inputFieldPlaceholder = $payload['input_field_placeholder'] ?? null;
        $this->selective = $payload['selective'] ?? null;
    }

    public function isForceReply(): bool
    {
        return $this->forceReply;
    }

    public function getInputFieldPlaceholder(): ?string
    {
        return $this->inputFieldPlaceholder;
    }

    public function getSelective(): ?bool
    {
        return $this->selective;
    }
}
