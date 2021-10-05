<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class Invoice extends BaseEntity
{
    private string $title;
    private string $description;
    private string $startParameter;
    private string $currency;
    private int $totalAmount;

    public function __construct(array $payload)
    {
        $this->title = $payload['title'];
        $this->description = $payload['description'];
        $this->startParameter = $payload['start_parameter'];
        $this->currency = $payload['currency'];
        $this->totalAmount = $payload['total_amount'];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }
}
