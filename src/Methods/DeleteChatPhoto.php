<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

class DeleteChatPhoto extends BaseMethod
{
    protected const METHOD_URL = 'deleteChatPhoto';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
