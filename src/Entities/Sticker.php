<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class Sticker extends BaseEntity
{
    private string $fileId;
    private string $fileUniqueId;
    private int $width;
    private int $height;
    private bool $isAnimated;
    private ?PhotoSize $thumb;
    private ?string $emoji;
    private ?string $setName;
    private ?MaskPosition $maskPosition;
    private ?int $fileSize;

    public function __construct(array $payload)
    {
        $this->fileId = $payload['file_id'];
        $this->fileUniqueId = $payload['file_unique_id'];
        $this->width = $payload['width'];
        $this->height = $payload['height'];
        $this->isAnimated = $payload['is_animated'];
        $this->thumb = $payload['thumb'] ? new PhotoSize($payload['thumb']) : null;
        $this->emoji = $payload['emoji'] ?? null;
        $this->setName = $payload['set_name'] ?? null;
        $this->maskPosition = $payload['mask_position'] ? new MaskPosition($payload['mask_position']) : null;
        $this->fileSize = $payload['file_size'] ?? null;
    }

    public function getFileId(): ?string
    {
        return $this->fileId;
    }

    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getIsAnimated(): bool
    {
        return $this->isAnimated;
    }

    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    public function getSetName(): ?string
    {
        return $this->setName;
    }

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
