<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class EncryptedCredentials extends BaseEntity
{
    private string $data;
    private string $hash;
    private string $secret;

    public function __construct(array $payload)
    {
        $this->data = $payload['data'];
        $this->hash = $payload['hash'];
        $this->secret = $payload['secret'];
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }
}
