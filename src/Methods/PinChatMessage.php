<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
class PinChatMessage extends BaseMethod
{
    protected const METHOD_URL = 'pinChatMessage';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
