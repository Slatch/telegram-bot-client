<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class ReplyKeyboardMarkup extends BaseEntity
{
    /** @var KeyboardButton[][] */
    private array $keyboard;
    private ?bool $resizeKeyboard;
    private ?bool $oneTimeKeyboard;
    private ?string $inputFieldPlaceholder;
    private ?bool $selective;

    public function __construct(array $payload)
    {
        foreach ((array)$payload['keyboard'] as $keyboards) {
            foreach ($keyboards as $keyboard) {
                $this->keyboard[] = new KeyboardButton($keyboard);
            }
        }
        $this->resizeKeyboard = $payload['resize_keyboard'] ?? null;
        $this->oneTimeKeyboard = $payload['one_time_keyboard'] ?? null;
        $this->inputFieldPlaceholder = $payload['input_field_placeholder'] ?? null;
        $this->selective = $payload['selective'] ?? null;
    }

    /**
     * @return KeyboardButton[][]|null
     */
    public function getKeyboard(): ?array
    {
        return $this->keyboard;
    }

    public function getResizeKeyboard(): ?bool
    {
        return $this->resizeKeyboard;
    }

    public function getOneTimeKeyboard(): ?bool
    {
        return $this->oneTimeKeyboard;
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
