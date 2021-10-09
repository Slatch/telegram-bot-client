<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class SendMediaGroupArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    /** @var InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo */
    private $media;
    private ?bool $disableNotification;
    private ?int $replyToMessageId;
    private ?bool $allowSendingWithoutReply;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'media' => $this->media,
            ] + TypeFilter::nullable([
                'disable_notification' => $this->disableNotification,
                'reply_to_message_id' => $this->replyToMessageId,
                'allow_sending_without_reply' => $this->allowSendingWithoutReply,
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
     * @param InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo $media
     */
    public function setMedia($media): void
    {
        $this->media = $media;
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
}
