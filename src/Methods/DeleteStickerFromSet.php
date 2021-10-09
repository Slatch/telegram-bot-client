<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;

class DeleteStickerFromSet extends BaseMethod
{
    protected const METHOD_URL = 'deleteStickerFromSet';

    public function parseResponse(StreamInterface $stream): bool
    {
        $response = parent::parseResponse($stream);
        return (bool)$response;
    }
}
