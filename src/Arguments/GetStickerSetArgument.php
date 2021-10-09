<?php

namespace Slatch\TelegramBotClient\Arguments;

class GetStickerSetArgument implements \JsonSerializable
{
    private string $name;

    /**
     * @internal
     */
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
