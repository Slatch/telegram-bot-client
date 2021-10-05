<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class VoiceChatParticipantsInvited extends BaseEntity
{
    /** @var ?User[] */
    private ?array $users;

    public function __construct(array $payload)
    {
        foreach ((array)$payload['users'] as $user) {
            $this->users[] = new User($user);
        }
    }

    /**
     * @return User[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }
}
