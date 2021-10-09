<?php

namespace Slatch\TelegramBotClient\Methods;

use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Entities\UserProfilePhotos;

/**
 * @internal
 */
class GetUserProfilePhotos extends BaseMethod
{
    protected const METHOD_URL = 'getUserProfilePhotos';

    public function parseResponse(StreamInterface $stream): UserProfilePhotos
    {
        $response = parent::parseResponse($stream);
        return new UserProfilePhotos($response);
    }
}
