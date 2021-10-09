<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Exceptions\NotImplementedException;

class InputFile extends BaseEntity
{
    public function __construct(array $payload)
    {
        throw new NotImplementedException();
    }
}
