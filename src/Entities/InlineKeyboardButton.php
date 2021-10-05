<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class InlineKeyboardButton extends BaseEntity
{
    private string $text;
    private ?string $url;
    private ?LoginUrl $loginUrl;
    private ?string $callbackData;
    private ?string $switchInlineQuery;
    private ?string $switchInlineQueryCurrentChat;
    private ?CallbackGame $callbackGame;
    private ?bool $pay;

    public function __construct(array $payload)
    {
        $this->text = $payload['text'];
        $this->url = $payload['url'] ?? null;
        $this->loginUrl = $payload['login_url'] ? new LoginUrl($payload['login_url']) : null;
        $this->callbackData = $payload['callback_data'] ?? null;
        $this->switchInlineQuery = $payload['switch_inline_query'] ?? null;
        $this->switchInlineQueryCurrentChat = $payload['switch_inline_query_current_chat'] ?? null;
        $this->callbackGame = $payload['callback_game'] ? new CallbackGame($payload['callback_game']) : null;
        $this->pay = $payload['pay'] ?? null;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getLoginUrl(): ?LoginUrl
    {
        return $this->loginUrl;
    }

    public function getCallbackData(): ?string
    {
        return $this->callbackData;
    }

    public function getSwitchInlineQuery(): ?string
    {
        return $this->switchInlineQuery;
    }

    public function getSwitchInlineQueryCurrentChat(): ?string
    {
        return $this->switchInlineQueryCurrentChat;
    }

    public function getCallbackGame(): ?CallbackGame
    {
        return $this->callbackGame;
    }

    public function getPay(): ?bool
    {
        return $this->pay;
    }
}
