<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Message;

/**
 * @internal
 */
class EditMessageCaption extends BaseMethod
{
    protected const METHOD_URL = 'editMessageCaption';

    /**
     * @param StreamInterface $stream
     * @return Message|bool
     */
    public function parseResponse(StreamInterface $stream)
    {
        $response = parent::parseResponse($stream);
        return new Message($response);
    }
}
