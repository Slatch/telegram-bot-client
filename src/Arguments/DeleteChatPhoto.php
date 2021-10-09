<?php

namespace Slatch\TelegramBotClient\Arguments;

class DeleteChatPhoto implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;

    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
        ];
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }
}
