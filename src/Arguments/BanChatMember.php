<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class BanChatMember implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private int $userId;
    private ?int $untilDate;
    private ?bool $revokeMessages;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'user_id' => $this->userId,
            ] + TypeFilter::nullable([
                'until_date' => $this->untilDate,
                'revoke_messages' => $this->revokeMessages,
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

    public function setUntilDate(int $untilDate): void
    {
        $this->untilDate = $untilDate;
    }

    public function setRevokeMessages(bool $revokeMessages): void
    {
        $this->revokeMessages = $revokeMessages;
    }
}
