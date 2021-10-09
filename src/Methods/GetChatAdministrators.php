<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\ChatMemberAdministrator;

/**
 * @internal
 */
class GetChatAdministrators extends BaseMethod
{
    protected const METHOD_URL = 'getChatAdministrators';

    /**
     * @param StreamInterface $stream
     * @return ChatMemberAdministrator[]
     */
    public function parseResponse(StreamInterface $stream): array
    {
        $response = parent::parseResponse($stream);
        $result = [];
        foreach ((array)$response as $item) {
            $result[] = new ChatMemberAdministrator($item);
        }
        return $result;
    }
}
