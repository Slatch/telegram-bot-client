<?php

namespace Slatch\TelegramBotClient\Entities;

class InputLocationMessageContent extends InputMessageContent
{
    private float $latitude;
    private float $longitude;
    private ?float $horizontalAccuracy;
    private ?int $livePeriod;
    private ?int $heading;
    private ?int $proximityAlertRadius;

    public function __construct(array $payload)
    {
        parent::__construct($payload);

        $this->latitude = $payload['latitude'];
        $this->longitude = $payload['longitude'];
        $this->horizontalAccuracy = $payload['horizontal_accuracy'] ?? null;
        $this->livePeriod = $payload['live_period'] ?? null;
        $this->heading = $payload['heading'] ?? null;
        $this->proximityAlertRadius = $payload['proximity_alert_radius'] ?? null;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getHorizontalAccuracy(): ?float
    {
        return $this->horizontalAccuracy;
    }

    public function getLivePeriod(): ?int
    {
        return $this->livePeriod;
    }

    public function getHeading(): ?int
    {
        return $this->heading;
    }

    public function getProximityAlertRadius(): ?int
    {
        return $this->proximityAlertRadius;
    }
}
