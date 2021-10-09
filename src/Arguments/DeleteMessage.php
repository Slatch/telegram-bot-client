<?php

namespace Slatch\TelegramBotClient\Arguments;

class DeleteMessage implements \JsonSerializable
{
    /** @var int|string|null */
    private $chatId;
    private int $messageId;

    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setMessageId(int $messageId): void
    {
        $this->messageId = $messageId;
    }
}
