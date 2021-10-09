<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

class SetChatTitle extends BaseMethod
{
    protected const METHOD_URL = 'setChatTitle';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
