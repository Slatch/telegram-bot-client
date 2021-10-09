<?php

namespace Slatch\TelegramBotClient\Arguments;

class DeleteStickerFromSet implements \JsonSerializable
{
    private string $sticker;

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
