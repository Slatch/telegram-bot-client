<?php

namespace Slatch\TelegramBotClient\Entities;

class ChatInviteLink extends BaseEntity
{
    private string $inviteLink;
    private User $creator;
    private bool $isPrimary;
    private bool $isRevoked;
    private ?int $expireDate;
    private ?int $memberLimit;

    public function __construct(array $payload)
    {
        $this->inviteLink = $payload['file_id'];
        $this->creator = new User($payload['creator']);
        $this->isPrimary = $payload['file_unique_id'];
        $this->isRevoked = $payload['is_revoked'];
        $this->expireDate = $payload['expire_date'] ?? null;
        $this->memberLimit = $payload['member_limit'] ?? null;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getCreator(): User
    {
        return $this->creator;
    }

    public function getIsPrimary(): bool
    {
        return $this->isPrimary;
    }

    public function getIsRevoked(): bool
    {
        return $this->isRevoked;
    }

    public function getExpireDate(): ?int
    {
        return $this->expireDate;
    }

    public function getMemberLimit(): ?string
    {
        return $this->memberLimit;
    }
}
