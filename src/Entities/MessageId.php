<?php

namespace Slatch\TelegramBotClient\Entities;

class MessageId extends BaseEntity
{
    private int $messageId;

    public function __construct(array $payload)
    {
        $this->messageId = $payload['message_id'];
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
