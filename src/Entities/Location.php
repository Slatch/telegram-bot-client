<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class Location extends BaseEntity
{
    private float $longitude;
    private float $latitude;
    private ?float $horizontalAccuracy;
    private ?int $livePeriod;
    private ?int $heading;
    private ?int $proximityAlertRadius;

    public function __construct(array $payload)
    {
        $this->longitude = $payload['longitude'];
        $this->latitude = $payload['latitude'];
        $this->horizontalAccuracy = $payload['horizontal_accuracy'] ?? null;
        $this->livePeriod = $payload['livePeriod'] ?? null;
        $this->heading = $payload['heading'] ?? null;
        $this->proximityAlertRadius = $payload['proximity_alert_radius'] ?? null;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
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
