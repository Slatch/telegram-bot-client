<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\LabeledPrice;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SendInvoice implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private string $title;
    private string $description;
    private string $payload;
    private string $providerToken;
    private string $currency;
    /** @var LabeledPrice[] */
    private array $prices;
    private ?int $maxTipAmount = null;
    /** @var int[]|null */
    private ?array $suggestedTipAmounts = null;
    private ?string $startParameter = null;
    private ?string $providerData = null;
    private ?string $photoUrl = null;
    private ?int $photoSize = null;
    private ?int $photoWidth = null;
    private ?int $photoHeight = null;
    private ?bool $needName = null;
    private ?bool $needPhoneNumber = null;
    private ?bool $needEmail = null;
    private ?bool $needShippingAddress = null;
    private ?bool $sendPhoneNumberToProvider = null;
    private ?bool $sendEmailToProvider = null;
    private ?bool $isFlexible = null;
    private ?bool $disableNotification = null;
    private ?int $replyToMessageId = null;
    private ?bool $allowSendingWithoutReply = null;
    private ?InlineKeyboardMarkup $replyMarkup = null;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'title' => $this->title,
                'description' => $this->description,
                'payload' => $this->payload,
                'provider_token' => $this->providerToken,
                'currency' => $this->currency,
                'prices' => $this->prices,
            ] + TypeFilter::nullable([
                'max_tip_amount' => $this->maxTipAmount,
                'suggested_tip_amounts' => $this->suggestedTipAmounts,
                'start_parameter' => $this->startParameter,
                'provider_data' => $this->providerData,
                'photo_url' => $this->photoUrl,
                'photo_size' => $this->photoSize,
                'photo_width' => $this->photoWidth,
                'photo_height' => $this->photoHeight,
                'need_name' => $this->needName,
                'need_phone_number' => $this->needPhoneNumber,
                'need_email' => $this->needEmail,
                'need_shipping_address' => $this->needShippingAddress,
                'send_phone_number_to_provider' => $this->sendPhoneNumberToProvider,
                'send_email_to_provider' => $this->sendEmailToProvider,
                'is_flexible' => $this->isFlexible,
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

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setPayload(string $payload): void
    {
        $this->payload = $payload;
    }

    public function setProviderToken(string $providerToken): void
    {
        $this->providerToken = $providerToken;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @param LabeledPrice[] $prices
     */
    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }

    public function setMaxTipAmount(int $maxTipAmount): void
    {
        $this->maxTipAmount = $maxTipAmount;
    }

    /**
     * @param int[] $suggestedTipAmounts
     */
    public function setSuggestedTipAmounts(array $suggestedTipAmounts): void
    {
        $this->suggestedTipAmounts = $suggestedTipAmounts;
    }

    public function setStartParameter(string $startParameter): void
    {
        $this->startParameter = $startParameter;
    }

    public function setProviderData(string $providerData): void
    {
        $this->providerData = $providerData;
    }

    public function setPhotoUrl(string $photoUrl): void
    {
        $this->photoUrl = $photoUrl;
    }

    public function setPhotoSize(int $photoSize): void
    {
        $this->photoSize = $photoSize;
    }

    public function setPhotoWidth(int $photoWidth): void
    {
        $this->photoWidth = $photoWidth;
    }

    public function setPhotoHeight(int $photoHeight): void
    {
        $this->photoHeight = $photoHeight;
    }

    public function setNeedName(bool $needName): void
    {
        $this->needName = $needName;
    }

    public function setNeedPhoneNumber(bool $needPhoneNumber): void
    {
        $this->needPhoneNumber = $needPhoneNumber;
    }

    public function setNeedEmail(bool $needEmail): void
    {
        $this->needEmail = $needEmail;
    }

    public function setNeedShippingAddress(bool $needShippingAddress): void
    {
        $this->needShippingAddress = $needShippingAddress;
    }

    public function setSendPhoneNumberToProvider(bool $sendPhoneNumberToProvider): void
    {
        $this->sendPhoneNumberToProvider = $sendPhoneNumberToProvider;
    }

    public function setSendEmailToProvider(bool $sendEmailToProvider): void
    {
        $this->sendEmailToProvider = $sendEmailToProvider;
    }

    public function setIsFlexible(bool $isFlexible): void
    {
        $this->isFlexible = $isFlexible;
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

    public function setReplyMarkup(InlineKeyboardMarkup $replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
