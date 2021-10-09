<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ForceReply;
use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\InputFile;
use Slatch\TelegramBotClient\Entities\MessageEntity;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardRemove;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SendPhotoArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    /** @var InputFile|string */
    private $photo;
    private ?string $caption;
    private ?string $parseMode;
    /** @var ?MessageEntity[] */
    private ?array $captionEntities;
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
                'from_chat_id' => $this->photo,
            ] + TypeFilter::nullable([
                'caption' => $this->caption,
                'parse_mode' => $this->parseMode,
                'caption_entities' => $this->captionEntities,
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
     * @param InputFile|string $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
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
