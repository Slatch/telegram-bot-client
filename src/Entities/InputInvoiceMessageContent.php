<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class InputInvoiceMessageContent extends InputMessageContent
{
    private string $title;
    private string $description;
    private string $payload;
    private string $providerToken;
    private string $currency;
    /** @var LabeledPrice[] */
    private array $prices = [];
    private ?int $maxTipAmount;
    /** @var int[]|null */
    private ?array $suggestedTipAmounts;
    private ?string $providerData;
    private ?string $photoUrl;
    private ?int $photoSize;
    private ?int $photoWidth;
    private ?int $photoHeight;
    private ?bool $needName;
    private ?bool $needPhoneNumber;
    private ?bool $needEmail;
    private ?bool $needShippingAddress;
    private ?bool $sendPhoneNumberToProvider;
    private ?bool $sendEmailToProvider;
    private ?bool $isFlexible;

    public function __construct(array $payload)
    {
        parent::__construct($payload);

        $this->title = $payload['title'];
        $this->description = $payload['description'];
        $this->payload = $payload['payload'];
        $this->providerToken = $payload['provider_token'];
        $this->currency = $payload['currency'];

        foreach ($payload['prices'] as $price) {
            $this->prices[] = new LabeledPrice($price);
        }

        $this->maxTipAmount = $payload['max_tip_amount'] ?? null;
        $this->suggestedTipAmounts = $payload['suggested_tip_amounts'] ?? null;
        $this->providerData = $payload['provider_data'] ?? null;
        $this->photoUrl = $payload['photo_url'] ?? null;
        $this->photoSize = $payload['photo_size'] ?? null;
        $this->photoWidth = $payload['photo_width'] ?? null;
        $this->photoHeight = $payload['photo_height'] ?? null;
        $this->needName = $payload['need_name'] ?? null;
        $this->needPhoneNumber = $payload['need_phone_number'] ?? null;
        $this->needEmail = $payload['need_email'] ?? null;
        $this->needShippingAddress = $payload['need_shipping_address'] ?? null;
        $this->sendPhoneNumberToProvider = $payload['send_phone_number_to_provider'] ?? null;
        $this->sendEmailToProvider = $payload['send_email_to_provider'] ?? null;
        $this->isFlexible = $payload['is_flexible'] ?? null;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function getProviderToken(): string
    {
        return $this->providerToken;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return LabeledPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    public function getMaxTipAmount(): ?int
    {
        return $this->maxTipAmount;
    }

    /**
     * @return int[]|null
     */
    public function getSuggestedTipAmounts(): ?array
    {
        return $this->suggestedTipAmounts;
    }

    public function getProviderData(): ?string
    {
        return $this->providerData;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }

    public function getPhotoSize(): ?int
    {
        return $this->photoSize;
    }

    public function getPhotoWidth(): ?int
    {
        return $this->photoWidth;
    }

    public function getPhotoHeight(): ?int
    {
        return $this->photoHeight;
    }

    public function getNeedName(): ?bool
    {
        return $this->needName;
    }

    public function getNeedPhoneNumber(): ?bool
    {
        return $this->needPhoneNumber;
    }

    public function getNeedEmail(): ?bool
    {
        return $this->needEmail;
    }

    public function getNeedShippingAddress(): ?bool
    {
        return $this->needShippingAddress;
    }

    public function getSendPhoneNumberToProvider(): ?bool
    {
        return $this->sendPhoneNumberToProvider;
    }

    public function getSendEmailToProvider(): ?bool
    {
        return $this->sendEmailToProvider;
    }

    public function getIsFlexible(): ?bool
    {
        return $this->isFlexible;
    }
}
