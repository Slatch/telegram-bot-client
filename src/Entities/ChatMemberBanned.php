<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class ChatMemberBanned extends ChatMember
{
    private int $untilDate;

    public function __construct(array $payload)
    {
        parent::__construct($payload);
        $this->untilDate = $payload['until_date'];
    }

    public function getUntilDate(): int
    {
        return $this->untilDate;
    }
}
