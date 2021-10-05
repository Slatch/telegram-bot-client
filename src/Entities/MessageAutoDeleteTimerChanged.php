<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class MessageAutoDeleteTimerChanged extends BaseEntity
{
    private int $messageAutoDeleteTime;

    public function __construct(array $payload)
    {
        $this->messageAutoDeleteTime = $payload['message_auto_delete_time'];
    }

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }
}
