<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class AnswerCallbackQueryArgument implements \JsonSerializable
{
    private string $callbackQueryId;
    private ?string $text;
    private ?bool $showAlert;
    private ?string $url;
    private ?int $cacheTime;

    /**
     * @internal
     */
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
