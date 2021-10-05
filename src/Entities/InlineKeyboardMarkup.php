<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class InlineKeyboardMarkup extends BaseEntity
{
    /** @var ?InlineKeyboardButton[][] */
    private ?array $inlineKeyboard;

    public function __construct(array $payload)
    {
        foreach ((array)$payload['inline_keyboard'] as $inlineKeyboards) {
            foreach ($inlineKeyboards as $inlineKeyboard) {
                $this->inlineKeyboard[] = new InlineKeyboardButton($inlineKeyboard);
            }
        }
    }

    /**
     * @return InlineKeyboardButton[][]|null
     */
    public function getInlineKeyboard(): ?array
    {
        return $this->inlineKeyboard;
    }
}
