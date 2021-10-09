<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Chat;

/**
 * @internal
 */
class GetChat extends BaseMethod
{
    protected const METHOD_URL = 'getChat';

    public function parseResponse(StreamInterface $stream): Chat
    {
        $response = parent::parseResponse($stream);
        return new Chat($response);
    }
}
