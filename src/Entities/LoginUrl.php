<?php

namespace Slatch\TelegramBotClient\Entities;

class LoginUrl extends BaseEntity
{
    private string $url;
    private ?string $forwardText;
    private ?string $botUsername;
    private ?bool $requestWriteAccess;

    public function __construct(array $payload)
    {
        $this->url = $payload['url'];
        $this->forwardText = $payload['forward_text'] ?? null;
        $this->botUsername = $payload['bot_username'] ?? null;
        $this->requestWriteAccess = $payload['request_write_access'] ?? null;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getForwardText(): ?string
    {
        return $this->forwardText;
    }

    public function getBotUsername(): ?string
    {
        return $this->botUsername;
    }

    public function getRequestWriteAccess(): ?bool
    {
        return $this->requestWriteAccess;
    }
}
