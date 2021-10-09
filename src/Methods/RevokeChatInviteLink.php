<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\ChatInviteLink;

/**
 * @internal
 */
class RevokeChatInviteLink extends BaseMethod
{
    protected const METHOD_URL = 'revokeChatInviteLink';

    public function parseResponse(StreamInterface $stream): ChatInviteLink
    {
        $response = parent::parseResponse($stream);
        return new ChatInviteLink($response);
    }
}
