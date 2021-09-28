<?php

namespace Slatch\TelegramBotClient\Api;

class Config implements ApiConfigInterface
{
    private $apiHost;

    public function __construct(string $apiHost)
    {
        $this->apiHost = $this->normalizeHost($apiHost);
    }

    public function getHost(): string
    {
        return $this->apiHost;
    }

    private function normalizeHost(string $apiHost): string
    {
        return rtrim($apiHost, '/');
    }
}
