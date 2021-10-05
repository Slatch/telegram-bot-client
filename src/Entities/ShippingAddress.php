<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class ShippingAddress extends BaseEntity
{
    private string $countryCode;
    private string $state;
    private string $city;
    private string $streetLine1;
    private string $streetLine2;
    private string $postCode;

    public function __construct(array $payload)
    {
        $this->countryCode = $payload['country_code'];
        $this->state = $payload['state'];
        $this->city = $payload['city'];
        $this->streetLine1 = $payload['street_line1'];
        $this->streetLine2 = $payload['street_line2'];
        $this->postCode = $payload['post_code'];
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getStreetLine1(): string
    {
        return $this->streetLine1;
    }

    public function getStreetLine2(): string
    {
        return $this->streetLine2;
    }

    public function getPostCode(): string
    {
        return $this->postCode;
    }
}
