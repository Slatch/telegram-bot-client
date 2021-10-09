<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\MessageEntity;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class EditMessageText implements \JsonSerializable
{
    /** @var int|string|null */
    private $chatId = null;
    private ?int $messageId = null;
    private ?int $inlineMessageId = null;
    private string $text;
    private ?string $parseMode = null;
    /** @var ?MessageEntity[] */
    private ?array $entities = null;
    private ?bool $disableWebPagePreview = null;
    private ?InlineKeyboardMarkup $replyMarkup = null;

    public function jsonSerialize(): array
    {
        return [
                'text' => $this->text,
            ] + TypeFilter::nullable([
                'chat_id' => $this->chatId,
                'message_id' => $this->messageId,
                'inline_message_id' => $this->inlineMessageId,
                'parse_mode' => $this->parseMode,
                'entities' => $this->entities,
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

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function setParseMode(string $parseMode): void
    {
        $this->parseMode = $parseMode;
    }

    /**
     * @param MessageEntity[] $entities
     */
    public function setEntities(array $entities): void
    {
        $this->entities = $entities;
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
