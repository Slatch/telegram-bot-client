<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

/**
 * @link https://core.telegram.org/bots/api#logout
 */
class LogOut extends BaseMethod
{
    protected const METHOD_URL = 'logOut';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
