<?php

namespace Slatch\TelegramBotClient\Entities;

abstract class BaseEntity
{
    abstract public function __construct(array $payload);
}
