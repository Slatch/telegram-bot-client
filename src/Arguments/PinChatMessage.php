<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class PinChatMessage implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private int $messageId;
    private ?bool $disableNotification;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'message_id' => $this->messageId,
            ] + TypeFilter::nullable([
                'description' => $this->disableNotification,
            ]);
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }
    public function setMessageId(int $messageId): void
    {
        $this->messageId = $messageId;
    }

    public function setDisableNotification(bool $disableNotification): void
    {
        $this->disableNotification = $disableNotification;
    }
}
