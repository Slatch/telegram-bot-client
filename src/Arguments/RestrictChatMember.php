<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ChatPermissions;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class RestrictChatMember implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private int $userId;
    private ChatPermissions $permissions;
    private ?int $untilDate;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'user_id' => $this->userId,
                'permissions' => $this->permissions,
            ] + TypeFilter::nullable([
                'until_date' => $this->untilDate,
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

    public function setPermissions(ChatPermissions $permissions): void
    {
        $this->permissions = $permissions;
    }

    public function setUntilDate(int $untilDate): void
    {
        $this->untilDate = $untilDate;
    }
}
