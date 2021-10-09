<?php

namespace Slatch\TelegramBotClient\Entities;

class OrderInfo extends BaseEntity
{
    private ?string $name;
    private ?string $phoneNumber;
    private ?string $email;
    private ?ShippingAddress $shippingAddress;

    public function __construct(array $payload)
    {
        $this->name = $payload['name'] ?? null;
        $this->phoneNumber = $payload['phone_number'] ?? null;
        $this->email = $payload['email'] ?? null;
        $this->shippingAddress = isset($payload['shipping_address']) ? new ShippingAddress($payload['shipping_address']) : null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shippingAddress;
    }
}
