<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Exceptions\BadRequestException;

/**
 * @internal
 */
abstract class BaseMethod
{
    /** @var string */
    protected const METHOD_URL = '';

    public function getMethod(): string
    {
        return static::METHOD_URL;
    }

    public function parseResponse(StreamInterface $stream)
    {
        $response = json_decode($stream->getContents(), true);

        if (isset($response['ok']) && $response['ok'] === false) {
            throw new BadRequestException($response['description'], $response['error_code']);
        }

        return $response['result'];
    }
}
