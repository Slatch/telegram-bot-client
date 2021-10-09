<?php

namespace Slatch\TelegramBotClient\Arguments;

class GetFileArgument implements \JsonSerializable
{
    private string $fileId;

    /**
     * @internal
     */
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
