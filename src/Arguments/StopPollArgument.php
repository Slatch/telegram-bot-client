<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class StopPollArgument implements \JsonSerializable
{
    /** @var int|string|null */
    private $chatId;
    private int $messageId;
    private ?InlineKeyboardMarkup $replyMarkup;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'message_id' => $this->messageId,
            ] + TypeFilter::nullable([
                'reply_markup' => $this->replyMarkup,
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

    public function setReplyMarkup(InlineKeyboardMarkup $replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
