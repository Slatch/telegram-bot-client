<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class MessageEntity extends BaseEntity implements \JsonSerializable
{
    private string $type;
    private int $offset;
    private int $length;
    private ?string $url;
    private ?User $user;
    private ?string $language;

    public function __construct(array $payload)
    {
        $this->type = $payload['type'];
        $this->offset = $payload['offset'];
        $this->length = $payload['length'];
        $this->url = $payload['url'] ?? null;
        $this->user = isset($payload['user']) ? new User($payload['user']) : null;
        $this->language = $payload['language'] ?? null;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function jsonSerialize()
    {
        return [
                'type' => $this->getType(),
                'offset' => $this->getOffset(),
                'length' => $this->getLength(),
            ] + TypeFilter::nullable([
                'url' => $this->getUrl(),
                'user' => $this->getUser(),
                'language' => $this->getLanguage(),
            ]);
    }
}
