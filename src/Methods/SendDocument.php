<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Message;

class SendDocument extends BaseMethod
{
    protected const METHOD_URL = 'sendDocument';

    public function parseResponse(StreamInterface $stream): Message
    {
        $response = parent::parseResponse($stream);
        return new Message($response);
    }
}
