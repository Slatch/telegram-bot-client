<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Message;

class AnswerPreCheckoutQuery extends BaseMethod
{
    protected const METHOD_URL = 'answerPreCheckoutQuery';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
