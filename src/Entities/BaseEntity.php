<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
abstract class BaseEntity
{
    abstract public function __construct(array $payload);
}
