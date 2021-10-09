<?php

namespace Slatch\TelegramBotClient\Arguments;

class GetChatMemberArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private int $userId;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
        ];
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }
}
