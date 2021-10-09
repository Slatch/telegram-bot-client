<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Exceptions\NotImplementedException;

/**
 * @internal
 */
class BotCommandScope extends BaseEntity
{
    public function __construct(array $payload)
    {
        throw new NotImplementedException();
    }
}
