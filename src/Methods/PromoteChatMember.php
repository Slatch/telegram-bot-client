<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
class PromoteChatMember extends BaseMethod
{
    protected const METHOD_URL = 'promoteChatMember';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
