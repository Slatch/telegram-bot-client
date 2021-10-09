<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class AnswerPreCheckoutQuery implements \JsonSerializable
{
    private string $preCheckoutQueryId;
    private bool $ok;
    private ?string $errorMessage;

    public function jsonSerialize(): array
    {
        return [
                'pre_checkout_query_id' => $this->preCheckoutQueryId,
                'ok' => $this->ok,
            ] + TypeFilter::nullable([
                'error_message' => $this->errorMessage,
            ]);
    }

    public function setPreCheckoutQueryId(string $preCheckoutQueryId): void
    {
        $this->preCheckoutQueryId = $preCheckoutQueryId;
    }

    public function setOk(bool $ok): void
    {
        $this->ok = $ok;
    }

    public function setErrorMessage(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }
}
