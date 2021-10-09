<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class ChatMemberOwner extends ChatMember
{
    private bool $isAnonymous;
    private ?string $customTitle;

    public function __construct(array $payload)
    {
        parent::__construct($payload);
        $this->isAnonymous = $payload['is_anonymous'];
        $this->customTitle = $payload['custom_title'] ?? null;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }
}
