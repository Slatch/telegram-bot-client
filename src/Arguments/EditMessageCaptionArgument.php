<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\MessageEntity;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class EditMessageCaptionArgument implements \JsonSerializable
{
    /** @var int|string|null */
    private $chatId;
    private ?int $messageId;
    private ?int $inlineMessageId;
    private ?string $caption;
    private ?string $parseMode;
    /** @var ?MessageEntity[] */
    private ?array $captionEntities;
    private ?bool $disableWebPagePreview;
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
            'caption' => $this->caption,
            'parse_mode' => $this->parseMode,
            'caption_entities' => $this->captionEntities,
            'disable_web_page_preview' => $this->disableWebPagePreview,
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

    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }

    public function setParseMode(string $parseMode): void
    {
        $this->parseMode = $parseMode;
    }

    /**
     * @param MessageEntity[] $captionEntities
     */
    public function setCaptionEntities(array $captionEntities): void
    {
        $this->captionEntities = $captionEntities;
    }

    public function setDisableWebPagePreview(bool $disableWebPagePreview): void
    {
        $this->disableWebPagePreview = $disableWebPagePreview;
    }

    public function setReplyMarkup(InlineKeyboardMarkup $replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
