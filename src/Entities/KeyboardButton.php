<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class KeyboardButton extends BaseEntity
{
    private string $text;
    private ?bool $requestContact;
    private ?bool $requestLocation;
    private ?KeyboardButtonPollType $requestPoll;

    public function __construct(array $payload)
    {
        $this->text = $payload['text'];
        $this->requestContact = $payload['request_contact'] ?? null;
        $this->requestLocation = $payload['request_location'] ?? null;
        $this->requestPoll = $payload['request_poll'] ? new KeyboardButtonPollType($payload['request_poll']) : null;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getRequestContact(): ?bool
    {
        return $this->requestContact;
    }

    public function getRequestLocation(): ?bool
    {
        return $this->requestLocation;
    }

    public function getRequestPoll(): ?KeyboardButtonPollType
    {
        return $this->requestPoll;
    }
}
