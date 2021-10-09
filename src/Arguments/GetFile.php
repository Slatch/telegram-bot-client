<?php

namespace Slatch\TelegramBotClient\Arguments;

class GetFile implements \JsonSerializable
{
    private string $fileId;

    public function jsonSerialize(): array
    {
        return [
            'file_id' => $this->fileId,
        ];
    }

    public function setFileId(string $fileId): void
    {
        $this->fileId = $fileId;
    }
}
