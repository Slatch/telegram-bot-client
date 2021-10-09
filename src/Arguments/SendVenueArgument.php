<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ForceReply;
use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardRemove;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SendVenueArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private float $latitude;
    private float $longitude;
    private string $title;
    private string $address;
    private ?string $foursquareId;
    private ?string $foursquareType;
    private ?string $googlePlaceId;
    private ?string $googlePlaceType;
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
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'title' => $this->title,
                'address' => $this->address,
            ] + TypeFilter::nullable([
                'foursquare_id' => $this->foursquareId,
                'foursquare_type' => $this->foursquareType,
                'google_place_id' => $this->googlePlaceId,
                'google_place_type' => $this->googlePlaceType,
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

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function setFoursquareId(string $foursquareId): void
    {
        $this->foursquareId = $foursquareId;
    }

    public function setFoursquareType(string $foursquareType): void
    {
        $this->foursquareType = $foursquareType;
    }

    public function setGooglePlaceId(string $googlePlaceId): void
    {
        $this->googlePlaceId = $googlePlaceId;
    }

    public function setGooglePlaceType(string $googlePlaceType): void
    {
        $this->googlePlaceType = $googlePlaceType;
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
