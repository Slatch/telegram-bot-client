<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\StickerSet;

class GetStickerSet extends BaseMethod
{
    protected const METHOD_URL = 'getStickerSet';

    public function parseResponse(StreamInterface $stream): StickerSet
    {
        $response = parent::parseResponse($stream);
        return new StickerSet($response);
    }
}
