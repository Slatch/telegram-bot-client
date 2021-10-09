<?php

namespace Slatch\TelegramBotClient\Arguments;

class DeleteStickerFromSetArgument implements \JsonSerializable
{
    private string $sticker;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
            'sticker' => $this->sticker,
        ];
    }

    public function setSticker(string $sticker): void
    {
        $this->sticker = $sticker;
    }
}
