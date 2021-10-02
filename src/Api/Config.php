<?php

namespace Slatch\TelegramBotClient\Api;

use Slatch\TelegramBotClient\Exceptions\ApiHostValidationException;

class Config implements ApiConfigInterface
{
    private $apiHost;

    /**
     * @throws ApiHostValidationException
     */
    public function __construct(string $apiHost)
    {
        if (!$this->isHostValid($apiHost)) {
            throw new ApiHostValidationException();
        }
        $this->apiHost = $this->normalizeHost($apiHost);
    }

    public function getHost(): string
    {
        return $this->apiHost;
    }

    private function isHostValid(string $apiHost): bool
    {
        return filter_var($apiHost, FILTER_VALIDATE_URL);
    }

    private function normalizeHost(string $apiHost): string
    {
        $parsed = parse_url($apiHost);

        $result = $parsed['scheme'] . '://' . $parsed['host'];

        if (array_key_exists('path', $parsed)) {
            $result .= rtrim($parsed['path'], '/');
        }

        return $result;
    }
}
