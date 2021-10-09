<?php

namespace Slatch\TelegramBotClient\Arguments;

class GetStickerSet implements \JsonSerializable
{
    private string $name;

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
        ];
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
