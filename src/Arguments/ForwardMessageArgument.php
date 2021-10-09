<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class ForwardMessageArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    /** @var int|string */
    private $fromChatId;
    private ?bool $disableNotification = null;
    private int $messageId;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'from_chat_id' => $this->fromChatId,
                'message_id' => $this->messageId,
            ] + TypeFilter::nullable([
                'disable_notification' => $this->disableNotification,
            ]);
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    /**
     * @param int|string $fromChatId
     */
    public function setFromChatId($fromChatId): void
    {
        $this->fromChatId = $fromChatId;
    }

    public function setDisableNotification(bool $disableNotification): void
    {
        $this->disableNotification = $disableNotification;
    }

    public function setMessageId(int $messageId): void
    {
        $this->messageId = $messageId;
    }
}
