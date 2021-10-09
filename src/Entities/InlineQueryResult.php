<?php

namespace Slatch\TelegramBotClient\Entities;

abstract class InlineQueryResult extends BaseEntity
{
    protected string $type;
    protected string $id;
    protected ?InlineKeyboardMarkup $replyMarkup;

    public function __construct(array $payload)
    {
        $this->type = $payload['type'];
        $this->id = $payload['id'];
        $this->replyMarkup = isset($payload['reply_markup']) ? new InlineKeyboardMarkup($payload['reply_markup']) : null;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }
}
