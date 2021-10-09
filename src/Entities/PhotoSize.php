<?php

namespace Slatch\TelegramBotClient\Entities;

class PhotoSize extends BaseEntity
{
    private string $fileId;
    private string $fileUniqueId;
    private int $width;
    private int $height;
    private ?int $fileSize;

    public function __construct(array $payload)
    {
        $this->fileId = $payload['file_id'];
        $this->fileUniqueId = $payload['file_unique_id'];
        $this->width = $payload['width'];
        $this->height = $payload['height'];
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

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
