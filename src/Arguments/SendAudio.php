<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ForceReply;
use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\InputFile;
use Slatch\TelegramBotClient\Entities\MessageEntity;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardRemove;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SendAudio implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    /** @var InputFile|string */
    private $audio;
    private ?string $caption = null;
    private ?string $parseMode = null;
    /** @var ?MessageEntity[] */
    private ?array $captionEntities = null;
    private ?int $duration = null;
    private ?string $performer = null;
    private ?string $title = null;
    /** @var InputFile|string|null */
    private $thumb = null;
    private ?bool $disableNotification = null;
    private ?int $replyToMessageId = null;
    private ?bool $allowSendingWithoutReply = null;
    /** @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null  */
    private $replyMarkup = null;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'audio' => $this->audio,
            ] + TypeFilter::nullable([
                'caption' => $this->caption,
                'parse_mode' => $this->parseMode,
                'caption_entities' => $this->captionEntities,
                'duration' => $this->duration,
                'performer' => $this->performer,
                'title' => $this->title,
                'thumb' => $this->thumb,
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
     * @param InputFile|string $audio
     */
    public function setAudio($audio): void
    {
        $this->audio = $audio;
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

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function setPerformer(string $performer): void
    {
        $this->performer = $performer;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param InputFile|string $thumb
     */
    public function setThumb($thumb): void
    {
        $this->thumb = $thumb;
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
