<?php

namespace Slatch\TelegramBotClient\Entities;

class SuccessfulPayment extends BaseEntity
{
    private string $currency;
    private int $totalAmount;
    private string $invoicePayload;
    private ?string $shippingOptionId;
    private ?OrderInfo $orderInfo;
    private string $telegramPaymentChargeId;
    private string $providerPaymentChargeId;

    public function __construct(array $payload)
    {
        $this->currency = $payload['currency'];
        $this->totalAmount = $payload['total_amount'];
        $this->invoicePayload = $payload['invoice_payload'];
        $this->shippingOptionId = $payload['shipping_option_id'] ?? null;
        $this->orderInfo = isset($payload['order_info']) ? new OrderInfo($payload['order_info']) : null;
        $this->telegramPaymentChargeId = $payload['telegram_payment_charge_id'];
        $this->providerPaymentChargeId = $payload['provider_payment_charge_id'];
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }
}
