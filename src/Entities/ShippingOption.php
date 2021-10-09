<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class ShippingOption extends BaseEntity
{
    private string $id;
    private string $title;
    /** @var LabeledPrice[] */
    private array $prices;

    public function __construct(array $payload)
    {
        $this->id = $payload['id'];
        $this->title = $payload['title'];
        foreach ($payload['prices'] as $price) {
            $this->prices[] = new LabeledPrice($price);
        }
    }

    public function isForceReply(): bool
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return LabeledPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }
}
