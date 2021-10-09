<?php

namespace Slatch\TelegramBotClient\Entities;

class Voice extends BaseEntity
{
    private string $fileId;
    private string $fileUniqueId;
    private int $duration;
    private ?string $mimeType;
    private ?int $fileSize;

    public function __construct(array $payload)
    {
        $this->fileId = $payload['file_id'];
        $this->fileUniqueId = $payload['file_unique_id'];
        $this->duration = $payload['duration'];
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

    public function getDuration(): int
    {
        return $this->duration;
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
