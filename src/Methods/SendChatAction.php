<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
class SendChatAction extends BaseMethod
{
    protected const METHOD_URL = 'sendChatAction';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
