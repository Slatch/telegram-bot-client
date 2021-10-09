<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ShippingOption;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class AnswerShippingQuery implements \JsonSerializable
{
    private string $shippingQueryId;
    private bool $ok;
    /** @var ?ShippingOption[] */
    private ?array $shippingOptions = null;
    private ?string $errorMessage = null;

    public function jsonSerialize(): array
    {
        return [
                'shipping_query_id' => $this->shippingQueryId,
                'ok' => $this->ok,
            ] + TypeFilter::nullable([
                'caption_entities' => $this->shippingOptions,
                'error_message' => $this->errorMessage,
            ]);
    }

    public function setShippingQueryId(string $shippingQueryId): void
    {
        $this->shippingQueryId = $shippingQueryId;
    }

    public function setOk(bool $ok): void
    {
        $this->ok = $ok;
    }

    /**
     * @param ShippingOption[] $shippingOptions
     */
    public function setShippingOptions(array $shippingOptions): void
    {
        $this->shippingOptions = $shippingOptions;
    }

    public function setErrorMessage(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }
}
