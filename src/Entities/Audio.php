<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class Audio extends BaseEntity
{
    private string $fileId;
    private string $fileUniqueId;
    private int $duration;
    private ?string $performer;
    private ?string $title;
    private ?string $fileName;
    private ?string $mimeType;
    private ?int $fileSize;
    private ?PhotoSize $thumb;

    public function __construct(array $payload)
    {
        $this->fileId = $payload['file_id'];
        $this->fileUniqueId = $payload['file_unique_id'];
        $this->duration = $payload['duration'];
        $this->performer = $payload['performer'] ?? null;
        $this->title = $payload['title'] ?? null;
        $this->fileName = $payload['file_name'] ?? null;
        $this->mimeType = $payload['mime_type'] ?? null;
        $this->fileSize = $payload['file_size'] ?? null;
        $this->thumb = isset($payload['thumb']) ? new PhotoSize($payload['thumb']) : null;
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

    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    public function getTitle(): ?string
    {
        return $this->title;
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

    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }
}
