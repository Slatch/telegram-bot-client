<?php

namespace Slatch\TelegramBotClient\Arguments;

class RevokeChatInviteLink implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private string $inviteLink;

    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
            'invite_link' => $this->inviteLink,
        ];
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setInviteLink(string $inviteLink): void
    {
        $this->inviteLink = $inviteLink;
    }
}
