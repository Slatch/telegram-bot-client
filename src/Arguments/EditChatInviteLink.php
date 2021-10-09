<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class EditChatInviteLink implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private string $inviteLink;
    private ?int $expireDate = null;
    private ?int $memberLimit = null;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'invite_link' => $this->inviteLink,
            ] + TypeFilter::nullable([
                'expire_date' => $this->expireDate,
                'member_limit' => $this->memberLimit,
            ]);
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

    public function setExpireDate(int $expireDate): void
    {
        $this->expireDate = $expireDate;
    }

    public function setMemberLimit(int $memberLimit): void
    {
        $this->memberLimit = $memberLimit;
    }
}
