<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

class SetMyCommands extends BaseMethod
{
    protected const METHOD_URL = 'setMyCommands';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
