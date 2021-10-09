<?php

namespace Slatch\TelegramBotClient\Arguments;

class DeleteMessageArgument implements \JsonSerializable
{
    /** @var int|string|null */
    private $chatId;
    private int $messageId;

    /**
     * @internal
     */
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
