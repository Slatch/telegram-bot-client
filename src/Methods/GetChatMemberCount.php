<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

class GetChatMemberCount extends BaseMethod
{
    protected const METHOD_URL = 'getChatMemberCount';

    public function parseResponse(StreamInterface $stream): int
    {
        $response = parent::parseResponse($stream);
        return (int)$response;
    }
}
