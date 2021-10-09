<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Poll;

/**
 * @internal
 */
class StopPoll extends BaseMethod
{
    protected const METHOD_URL = 'stopPoll';

    public function parseResponse(StreamInterface $stream): Poll
    {
        $response = parent::parseResponse($stream);
        return new Poll($response);
    }
}
