<?php

namespace Slatch\TelegramBotClient\Arguments;

class SendChatAction implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private string $action;

    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
            'question' => $this->action,
        ];
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }
}
