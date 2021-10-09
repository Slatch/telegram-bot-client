<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class UnpinChatMessageArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private ?int $messageId;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
            ] + TypeFilter::nullable([
                'message_id' => $this->messageId,
            ]);
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
