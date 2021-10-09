<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
class AnswerInlineQuery extends BaseMethod
{
    protected const METHOD_URL = 'answerInlineQuery';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
