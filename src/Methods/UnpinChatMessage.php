<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

class UnpinChatMessage extends BaseMethod
{
    protected const METHOD_URL = 'unpinChatMessage';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
