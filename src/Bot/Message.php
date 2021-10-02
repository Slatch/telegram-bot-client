<?php

namespace Slatch\TelegramBotClient\Bot;

class Message
{
    private $chatId;
    private $text;

    public function __construct(int $chatId, string $text)
    {
        $this->chatId = $chatId;
        $this->text = $text;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
