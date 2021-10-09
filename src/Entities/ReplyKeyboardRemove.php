<?php

namespace Slatch\TelegramBotClient\Entities;

class ReplyKeyboardRemove extends BaseEntity
{
    private bool $removeKeyboard;
    private ?bool $selective;

    public function __construct(array $payload)
    {
        $this->removeKeyboard = $payload['remove_keyboard'];
        $this->selective = $payload['selective'] ?? null;
    }

    public function getRemoveKeyboard(): bool
    {
        return $this->removeKeyboard;
    }

    public function getSelective(): ?bool
    {
        return $this->selective;
    }
}
