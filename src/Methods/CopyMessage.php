<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Message;
use Slatch\TelegramBotClient\Entities\MessageId;

/**
 * @internal
 */
class CopyMessage extends BaseMethod
{
    protected const METHOD_URL = 'copyMessage';

    public function parseResponse(StreamInterface $stream): MessageId
    {
        $response = parent::parseResponse($stream);
        return new MessageId($response);
    }
}
