<?php

namespace Slatch\TelegramBotClient\Entities;

class Document extends BaseEntity
{
    private string $fileId;
    private string $fileUniqueId;
    private ?PhotoSize $thumb;
    private ?string $fileName;
    private ?string $mimeType;
    private ?int $fileSize;

    public function __construct(array $payload)
    {
        $this->fileId = $payload['file_id'];
        $this->fileUniqueId = $payload['file_unique_id'];
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
