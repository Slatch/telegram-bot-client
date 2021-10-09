<?php

namespace Slatch\TelegramBotClient\Entities;

class File extends BaseEntity
{
    private string $fileId;
    private string $fileUniqueId;
    private ?int $fileSize;
    private ?string $filePath;

    public function __construct(array $payload)
    {
        $this->fileId = $payload['file_id'];
        $this->fileUniqueId = $payload['file_unique_id'];
        $this->fileSize = $payload['file_size'] ?? null;
        $this->filePath = $payload['file_path'] ?? null;
    }

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function getFilePath(): ?string
    {
        return $this->filePath;
    }
}
