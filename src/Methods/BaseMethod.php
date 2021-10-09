<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

abstract class BaseMethod
{
    /** @var string */
    protected const METHOD_URL = '';

    public function getMethod(): string
    {
        return static::METHOD_URL;
    }

    public function parseResponse(StreamInterface $stream)
    {
        return json_decode($stream->getContents(), true)['result'];
    }
}
