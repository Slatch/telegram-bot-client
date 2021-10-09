<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
class SetChatAdministratorCustomTitle extends BaseMethod
{
    protected const METHOD_URL = 'setChatAdministratorCustomTitle';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
