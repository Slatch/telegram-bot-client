<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\File;

/**
 * @internal
 */
class GetFile extends BaseMethod
{
    protected const METHOD_URL = 'getFile';

    public function parseResponse(StreamInterface $stream): File
    {
        $response = parent::parseResponse($stream);
        return new File($response);
    }
}
