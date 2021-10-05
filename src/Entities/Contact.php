<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class Contact extends BaseEntity
{
    private string $phoneNumber;
    private string $firstName;
    private ?string $lastName;
    private ?int $userId;
    private ?string $vcard;

    public function __construct(array $payload)
    {
        $this->phoneNumber = $payload['phone_number'];
        $this->firstName = $payload['first_name'];
        $this->lastName = $payload['last_name'] ?? null;
        $this->userId = $payload['user_id'] ?? null;
        $this->vcard = $payload['vcard'] ?? null;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getVcard(): ?string
    {
        return $this->vcard;
    }
}
