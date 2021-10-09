<?php

namespace Slatch\TelegramBotClient\Entities;

class StickerSet extends BaseEntity
{
    private string $name;
    private string $title;
    private bool $isAnimated;
    private bool $containsMasks;
    /** @var Sticker[] */
    private array $stickers = [];
    private ?PhotoSize $thumb;

    public function __construct(array $payload)
    {
        $this->name = $payload['name'];
        $this->title = $payload['title'];
        $this->isAnimated = $payload['is_animated'];
        $this->containsMasks = $payload['contains_masks'];
        foreach ((array)$payload['stickers'] as $sticker) {
            $this->stickers[] = new Sticker($sticker);
        }
        $this->thumb = isset($payload['thumb']) ? new PhotoSize($payload['thumb']) : null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIsAnimated(): bool
    {
        return $this->isAnimated;
    }

    public function getContainsMasks(): bool
    {
        return $this->containsMasks;
    }

    /**
     * @return Sticker[]
     */
    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }
}
