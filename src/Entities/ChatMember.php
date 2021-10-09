<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
abstract class ChatMember extends BaseEntity
{
    protected string $status;
    protected User $user;

    public function __construct(array $payload)
    {
        $this->status = $payload['status'];
        $this->user = new User($payload['user']);
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
