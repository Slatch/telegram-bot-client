<?php

namespace Slatch\TelegramBotClient\Methods;

abstract class BaseMethod
{
    /** @var string */
    protected const METHOD_URL = '';

    public function getMethod(): string
    {
        return static::METHOD_URL;
    }
}
