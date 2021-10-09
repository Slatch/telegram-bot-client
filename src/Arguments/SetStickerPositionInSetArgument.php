<?php

namespace Slatch\TelegramBotClient\Arguments;

class SetStickerPositionInSetArgument implements \JsonSerializable
{
    private string $sticker;
    private int $position;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
            'sticker' => $this->sticker,
            'position' => $this->position,
        ];
    }

    public function setSticker(string $sticker): void
    {
        $this->sticker = $sticker;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }
}
