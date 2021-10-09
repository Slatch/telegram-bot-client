<?php

namespace Slatch\TelegramBotClient\Entities;

class VoiceChatParticipantsInvited extends BaseEntity
{
    /** @var ?User[] */
    private ?array $users;

    public function __construct(array $payload)
    {
        if (isset($payload['users'])) {
            foreach ((array)$payload['users'] as $user) {
                $this->users[] = new User($user);
            }
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
