<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class User extends BaseEntity implements \JsonSerializable
{
    private int $id;
    private bool $isBot;
    private string $firstName;
    private ?string $lastName;
    private ?string $username;
    private ?string $languageCode;
    private ?bool $canJoinGroups;
    private ?bool $canReadAllGroupMessages;
    private ?bool $supportsInlineQueries;

    public function __construct(array $payload)
    {
        $this->id = $payload['id'];
        $this->isBot = $payload['is_bot'];
        $this->firstName = $payload['first_name'];
        $this->lastName = $payload['last_name'] ?? null;
        $this->username = $payload['username'] ?? null;
        $this->languageCode = $payload['language_code'] ?? null;
        $this->canJoinGroups = $payload['can_join_groups'] ?? null;
        $this->canReadAllGroupMessages = $payload['can_read_all_group_messages'] ?? null;
        $this->supportsInlineQueries = $payload['supports_inline_queries'] ?? null;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function isBot(): bool
    {
        return $this->isBot;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function getCanJoinGroups(): ?bool
    {
        return $this->canJoinGroups;
    }

    public function getCanReadAllGroupMessages(): ?bool
    {
        return $this->canReadAllGroupMessages;
    }

    public function getSupportsInlineQueries(): ?bool
    {
        return $this->supportsInlineQueries;
    }

    public function jsonSerialize(): array
    {
        return [
                'id' => $this->getId(),
                'is_bot' => $this->isBot(),
                'first_name' => $this->getFirstName(),
            ] + TypeFilter::nullable([
                'last_name' => $this->getLastName(),
                'username' => $this->getUsername(),
                'language_code' => $this->getLanguageCode(),
                'can_join_groups' => $this->getCanJoinGroups(),
                'can_read_all_group_messages' => $this->getCanReadAllGroupMessages(),
                'supports_inline_queries' => $this->getSupportsInlineQueries(),
            ]);
    }
}
