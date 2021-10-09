<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Message;

class SendInvoice extends BaseMethod
{
    protected const METHOD_URL = 'sendInvoice';

    public function parseResponse(StreamInterface $stream): Message
    {
        $response = parent::parseResponse($stream);
        return new Message($response);
    }
}
