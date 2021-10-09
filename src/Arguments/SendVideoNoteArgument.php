<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ForceReply;
use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\InputFile;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardRemove;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SendVideoNoteArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    /** @var InputFile|string */
    private $videoNote;
    private ?int $duration;
    private ?int $length;
    /** @var InputFile|string|null */
    private $thumb;
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
                'video_note' => $this->videoNote,
            ] + TypeFilter::nullable([
                'duration' => $this->duration,
                'length' => $this->length,
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
     * @param InputFile|string $videoNote
     */
    public function setVideoNote($videoNote): void
    {
        $this->videoNote = $videoNote;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * @param InputFile|string|null $thumb
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
