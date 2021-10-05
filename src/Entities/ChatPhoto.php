<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class ChatPhoto extends BaseEntity
{
    private string $smallFileId;
    private string $smallFileUniqueId;
    private string $bigFileId;
    private string $bigFileUniqueId;

    public function __construct(array $payload)
    {
        $this->smallFileId = $payload['small_file_id'];
        $this->smallFileUniqueId = $payload['small_file_unique_id'];
        $this->bigFileId = $payload['big_file_id'];
        $this->bigFileUniqueId = $payload['big_file_unique_id'];
    }

    public function getSmallFileId(): string
    {
        return $this->smallFileId;
    }

    public function getSmallFileUniqueId(): string
    {
        return $this->smallFileUniqueId;
    }

    public function getBigFileId(): string
    {
        return $this->bigFileId;
    }

    public function getBigFileUniqueId(): string
    {
        return $this->bigFileUniqueId;
    }
}
