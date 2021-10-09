<?php

namespace Slatch\TelegramBotClient\Entities;

class MaskPosition extends BaseEntity
{
    private string $point;
    private float $xShift;
    private float $yShift;
    private float $scale;

    public function __construct(array $payload)
    {
        $this->point = $payload['point'];
        $this->xShift = $payload['x_shift'];
        $this->yShift = $payload['y_shift'];
        $this->scale = $payload['scale'];
    }

    public function getPoint(): string
    {
        return $this->point;
    }

    public function getXShift(): float
    {
        return $this->xShift;
    }

    public function getYShift(): float
    {
        return $this->yShift;
    }

    public function getScale(): float
    {
        return $this->scale;
    }
}
