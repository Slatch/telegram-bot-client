<?php

namespace Slatch\TelegramBotClient\Arguments;

class GetUserProfilePhotos implements \JsonSerializable
{
    private int $userId;
    private ?int $offset;
    private ?int $limit;

    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->userId,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }
}
