<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class Video extends BaseEntity
{
    private string $fileId;
    private string $fileUniqueId;
    private int $width;
    private int $height;
    private int $duration;
    private ?PhotoSize $thumb;
    private ?string $fileName;
    private ?string $mimeType;
    private ?int $fileSize;

    public function __construct(array $payload)
    {
        $this->fileId = $payload['file_id'];
        $this->fileUniqueId = $payload['file_unique_id'];
        $this->width = $payload['width'];
        $this->height = $payload['height'];
        $this->duration = $payload['duration'];
        $this->thumb = isset($payload['thumb']) ? new PhotoSize($payload['thumb']) : null;
        $this->fileName = $payload['file_name'] ?? null;
        $this->mimeType = $payload['mime_type'] ?? null;
        $this->fileSize = $payload['file_size'] ?? null;
    }

    public function getFileId(): string
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

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
