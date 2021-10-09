<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class AnswerCallbackQuery implements \JsonSerializable
{
    private string $callbackQueryId;
    private ?string $text = null;
    private ?bool $showAlert = null;
    private ?string $url = null;
    private ?int $cacheTime = null;

    public function jsonSerialize(): array
    {
        return [
                'callback_query_id' => $this->callbackQueryId,
            ] + TypeFilter::nullable([
                'text' => $this->text,
                'show_alert' => $this->showAlert,
                'url' => $this->url,
                'cache_time' => $this->cacheTime,
            ]);
    }

    public function setCallbackQueryId(string $callbackQueryId): void
    {
        $this->callbackQueryId = $callbackQueryId;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function setShowAlert(bool $showAlert): void
    {
        $this->showAlert = $showAlert;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function setCacheTime(int $cacheTime): void
    {
        $this->cacheTime = $cacheTime;
    }
}
