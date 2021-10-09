<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\Message;

class SendMediaGroup extends BaseMethod
{
    protected const METHOD_URL = 'sendMediaGroup';

    /**
     * @param StreamInterface $stream
     * @return Message[]
     */
    public function parseResponse(StreamInterface $stream): array
    {
        $response = parent::parseResponse($stream);
        $result = [];
        foreach ((array)$response as $item) {
            $result[] = new Message($item);
        }
        return $result;
    }
}
