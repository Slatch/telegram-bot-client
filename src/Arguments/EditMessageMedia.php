<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\InputMedia;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class EditMessageMedia implements \JsonSerializable
{
    /** @var int|string|null */
    private $chatId = null;
    private ?int $messageId = null;
    private ?int $inlineMessageId = null;
    private InputMedia $media;
    private ?InlineKeyboardMarkup $replyMarkup = null;

    public function jsonSerialize(): array
    {
        return [
                'media' => $this->media,
            ] + TypeFilter::nullable([
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

    public function setMedia(InputMedia $media): void
    {
        $this->media = $media;
    }

    public function setReplyMarkup(InlineKeyboardMarkup $replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
