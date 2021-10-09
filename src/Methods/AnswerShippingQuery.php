<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Message;

/**
 * @internal
 */
class AnswerShippingQuery extends BaseMethod
{
    protected const METHOD_URL = 'answerShippingQuery';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
