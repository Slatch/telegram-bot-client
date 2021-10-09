<?php

namespace Slatch\TelegramBotClient\Entities;

class VideoNote extends BaseEntity
{
    private string $fileId;
    private string $fileUniqueId;
    private int $length;
    private int $duration;
    private ?PhotoSize $thumb;
    private ?int $fileSize;

    public function __construct(array $payload)
    {
        $this->fileId = $payload['file_id'];
        $this->fileUniqueId = $payload['file_unique_id'];
        $this->length = $payload['length'];
        $this->duration = $payload['duration'];
        $this->thumb = isset($payload['thumb']) ? new PhotoSize($payload['thumb']) : null;
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

    public function getLength(): int
    {
        return $this->length;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
