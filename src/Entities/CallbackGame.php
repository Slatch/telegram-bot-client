<?php

namespace Slatch\TelegramBotClient\Entities;

class CallbackGame extends BaseEntity
{
    private int $userId;
    private int $score;
    private ?bool $force;
    private ?bool $disableEditMessage;
    private ?int $chatId;
    private ?int $messageId;
    private ?string $inlineMessageId;

    public function __construct(array $payload)
    {
        $this->userId = $payload['user_id'];
        $this->score = $payload['score'];
        $this->force = $payload['force'] ?? null;
        $this->disableEditMessage = $payload['disable_edit_message'] ?? null;
        $this->chatId = $payload['chat_id'] ?? null;
        $this->messageId = $payload['message_id'] ?? null;
        $this->inlineMessageId = $payload['inline_message_id'] ?? null;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getForce(): ?bool
    {
        return $this->force;
    }

    public function getDisableEditMessage(): ?bool
    {
        return $this->disableEditMessage;
    }

    public function getChatId(): ?int
    {
        return $this->chatId;
    }

    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }
}
