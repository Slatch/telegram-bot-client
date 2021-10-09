<?php

namespace Slatch\TelegramBotClient\Arguments;

class SetChatStickerSet implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private string $stickerSetName;

    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
            'sticker_set_name' => $this->stickerSetName,
        ];
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setStickerSetName(string $stickerSetName): void
    {
        $this->stickerSetName = $stickerSetName;
    }
}
