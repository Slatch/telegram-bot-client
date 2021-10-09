<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ForceReply;
use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardRemove;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SendLocation implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private float $latitude;
    private float $longitude;
    private ?float $horizontalAccuracy;
    private ?int $livePeriod;
    private ?int $heading;
    private ?int $proximityAlertRadius;
    private ?bool $disableNotification;
    private ?int $replyToMessageId;
    private ?bool $allowSendingWithoutReply;
    /** @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null  */
    private $replyMarkup;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ] + TypeFilter::nullable([
                'horizontal_accuracy' => $this->horizontalAccuracy,
                'live_period' => $this->livePeriod,
                'heading' => $this->heading,
                'proximity_alert_radius' => $this->proximityAlertRadius,
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

    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function setHorizontalAccuracy(float $horizontalAccuracy): void
    {
        $this->horizontalAccuracy = $horizontalAccuracy;
    }

    public function setLivePeriod(int $livePeriod): void
    {
        $this->livePeriod = $livePeriod;
    }

    public function setHeading(int $heading): void
    {
        $this->heading = $heading;
    }

    public function setProximityAlertRadius(int $proximityAlertRadius): void
    {
        $this->proximityAlertRadius = $proximityAlertRadius;
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
