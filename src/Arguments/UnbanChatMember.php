<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class UnbanChatMember implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private int $userId;
    private ?bool $onlyIfBanned = null;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'user_id' => $this->userId,
            ] + TypeFilter::nullable([
                'only_if_banned' => $this->onlyIfBanned,
            ]);
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function setOnlyIfBanned(bool $onlyIfBanned): void
    {
        $this->onlyIfBanned = $onlyIfBanned;
    }
}
