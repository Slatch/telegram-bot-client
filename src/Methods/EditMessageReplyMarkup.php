<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Message;

/**
 * @internal
 */
class EditMessageReplyMarkup extends BaseMethod
{
    protected const METHOD_URL = 'editMessageReplyMarkup';

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
