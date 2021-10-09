<?php

namespace Slatch\TelegramBotClient\Arguments;

class SetChatAdministratorCustomTitle implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private int $userId;
    private string $customTitle;

    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
            'custom_title' => $this->customTitle,
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

    public function setCustomTitle(string $customTitle): void
    {
        $this->customTitle = $customTitle;
    }
}
