<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class EditMessageReplyMarkupArgument implements \JsonSerializable
{
    /** @var int|string|null */
    private $chatId;
    private ?int $messageId;
    private ?int $inlineMessageId;
    private ?InlineKeyboardMarkup $replyMarkup;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return TypeFilter::nullable([
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'inline_message_id' => $this->inlineMessageId,
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

    public function setInlineMessageId(int $inlineMessageId): void
    {
        $this->inlineMessageId = $inlineMessageId;
    }

    public function setReplyMarkup(InlineKeyboardMarkup $replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
