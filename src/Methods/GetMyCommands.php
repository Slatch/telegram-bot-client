<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\BotCommand;

/**
 * @internal
 */
class GetMyCommands extends BaseMethod
{
    protected const METHOD_URL = 'getMyCommands';

    /**
     * @param StreamInterface $stream
     * @return BotCommand[]
     */
    public function parseResponse(StreamInterface $stream): array
    {
        $response = parent::parseResponse($stream);
        $result = [];
        foreach ((array)$response as $command) {
            $result[] = new BotCommand($command);
        }
        return $result;
    }
}
