<?php

namespace Slatch\TelegramBotClient\Entities;

class InputVenueMessageContent extends InputMessageContent
{
    private float $latitude;
    private float $longitude;
    private string $title;
    private string $address;
    private ?string $foursquareId;
    private ?string $foursquareType;
    private ?string $googlePlaceId;
    private ?string $googlePlaceType;

    public function __construct(array $payload)
    {
        parent::__construct($payload);

        $this->latitude = $payload['latitude'];
        $this->longitude = $payload['longitude'];
        $this->title = $payload['title'];
        $this->address = $payload['address'];
        $this->foursquareId = $payload['foursquare_id'] ?? null;
        $this->foursquareType = $payload['foursquare_type'] ?? null;
        $this->googlePlaceId = $payload['google_place_id'] ?? null;
        $this->googlePlaceType = $payload['google_place_type'] ?? null;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getFoursquareId(): ?string
    {
        return $this->foursquareId;
    }

    public function getFoursquareType(): ?string
    {
        return $this->foursquareType;
    }

    public function getGooglePlaceId(): ?string
    {
        return $this->googlePlaceId;
    }

    public function getGooglePlaceType(): ?string
    {
        return $this->googlePlaceType;
    }
}
