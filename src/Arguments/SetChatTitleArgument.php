<?php

namespace Slatch\TelegramBotClient\Arguments;

class SetChatTitleArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private string $title;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
            'title' => $this->title,
        ];
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
