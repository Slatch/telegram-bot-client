<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\ChatMember;
use Slatch\TelegramBotClient\Exceptions\NotImplementedException;

class GetChatMember extends BaseMethod
{
    protected const METHOD_URL = 'getChatMember';

    public function parseResponse(StreamInterface $stream): ChatMember
    {
        throw new NotImplementedException();
        $response = parent::parseResponse($stream);
        return new ChatMember($response);
    }
}
