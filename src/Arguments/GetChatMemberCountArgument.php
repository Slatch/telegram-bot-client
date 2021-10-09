<?php

namespace Slatch\TelegramBotClient\Arguments;

class GetChatMemberCountArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;

    /**
     * @internal
     */
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
