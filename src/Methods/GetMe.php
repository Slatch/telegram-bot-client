<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\User;

/**
 * @internal
 * @link https://core.telegram.org/bots/api#getme
 */
class GetMe extends BaseMethod
{
    protected const METHOD_URL = 'getMe';

    public function parseResponse(StreamInterface $stream): User
    {
        $response = parent::parseResponse($stream);
        return new User($response);
    }
}
