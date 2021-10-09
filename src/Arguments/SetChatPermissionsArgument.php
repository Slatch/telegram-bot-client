<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ChatPermissions;

class SetChatPermissionsArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private ChatPermissions $permissions;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
            'permissions' => $this->permissions,
        ];
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setPermissions(ChatPermissions $permissions): void
    {
        $this->permissions = $permissions;
    }
}
