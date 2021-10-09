<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Exceptions\NotImplementedException;

/**
 * @internal
 */
class InputMedia extends BaseEntity
{
    public function __construct(array $payload)
    {
        throw new NotImplementedException();
    }
}
