<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ForceReply;
use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\InputFile;
use Slatch\TelegramBotClient\Entities\MessageEntity;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardRemove;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SendDocumentArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    /** @var InputFile|string */
    private $document;
    /** @var InputFile|string|null */
    private $thumb;
    private ?string $caption;
    private ?string $parseMode;
    /** @var ?MessageEntity[] */
    private ?array $captionEntities;
    private ?bool $disableContentTypeDetection;
    private ?bool $disableNotification;
    private ?int $replyToMessageId;
    private ?bool $allowSendingWithoutReply;
    /** @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null  */
    private $replyMarkup;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'document' => $this->document,
            ] + TypeFilter::nullable([
                'thumb' => $this->thumb,
                'caption' => $this->caption,
                'parse_mode' => $this->parseMode,
                'caption_entities' => $this->captionEntities,
                'disable_content_type_detection' => $this->disableContentTypeDetection,
                'disable_notification' => $this->disableNotification,
                'reply_to_message_id' => $this->replyToMessageId,
                'allow_sending_without_reply' => $this->allowSendingWithoutReply,
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

    /**
     * @param InputFile|string $document
     */
    public function setDocument($document): void
    {
        $this->document = $document;
    }

    /**
     * @param InputFile|string|null $thumb
     */
    public function setThumb($thumb): void
    {
        $this->thumb = $thumb;
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

    public function setDisableContentTypeDetection(bool $disableContentTypeDetection): void
    {
        $this->disableContentTypeDetection = $disableContentTypeDetection;
    }

    public function setDisableNotification(bool $disableNotification): void
    {
        $this->disableNotification = $disableNotification;
    }

    public function setReplyToMessageId(int $replyToMessageId): void
    {
        $this->replyToMessageId = $replyToMessageId;
    }

    public function setAllowSendingWithoutReply(bool $allowSendingWithoutReply): void
    {
        $this->allowSendingWithoutReply = $allowSendingWithoutReply;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove $replyMarkup
     */
    public function setReplyMarkup($replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
