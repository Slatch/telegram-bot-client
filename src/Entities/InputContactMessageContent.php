<?php

namespace Slatch\TelegramBotClient\Entities;

class InputContactMessageContent extends InputMessageContent
{
    private string $phoneNumber;
    private string $firstName;
    private ?string $lastName;
    private ?string $vcard;

    public function __construct(array $payload)
    {
        parent::__construct($payload);

        $this->phoneNumber = $payload['phone_number'];
        $this->firstName = $payload['first_name'];
        $this->lastName = $payload['last_name'] ?? null;
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

    public function getVcard(): ?string
    {
        return $this->vcard;
    }
}
