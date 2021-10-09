<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class EditMessageLiveLocation implements \JsonSerializable
{
    /** @var null|int|string */
    private $chatId = null;
    private ?int $messageId = null;
    private ?string $inlineMessageId = null;
    private float $latitude;
    private float $longitude;
    private ?float $horizontalAccuracy = null;
    private ?int $heading = null;
    private ?int $proximityAlertRadius = null;
    private ?InlineKeyboardMarkup $replyMarkup = null;

    public function jsonSerialize(): array
    {
        return [
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ] + TypeFilter::nullable([
                'chat_id' => $this->chatId,
                'message_id' => $this->messageId,
                'inline_message_id' => $this->inlineMessageId,
                'horizontal_accuracy' => $this->horizontalAccuracy,
                'heading' => $this->heading,
                'proximity_alert_radius' => $this->proximityAlertRadius,
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

    public function setInlineMessageId(string $inlineMessageId): void
    {
        $this->inlineMessageId = $inlineMessageId;
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

    public function setHeading(int $heading): void
    {
        $this->heading = $heading;
    }

    public function setProximityAlertRadius(int $proximityAlertRadius): void
    {
        $this->proximityAlertRadius = $proximityAlertRadius;
    }

    public function setReplyMarkup(InlineKeyboardMarkup $replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
