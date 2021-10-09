<?php

namespace Slatch\TelegramBotClient\Entities;

class PassportFile extends BaseEntity
{
    private string $fileId;
    private string $fileUniqueId;
    private int $fileSize;
    private int $fileDate;

    public function __construct(array $payload)
    {
        $this->fileId = $payload['file_id'];
        $this->fileUniqueId = $payload['file_unique_id'];
        $this->fileSize = $payload['file_size'];
        $this->fileDate = $payload['file_date'];
    }

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function getFileDate(): int
    {
        return $this->fileDate;
    }
}
