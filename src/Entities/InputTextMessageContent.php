<?php

namespace Slatch\TelegramBotClient\Entities;

class InputTextMessageContent extends InputMessageContent
{
    private string $messageText;
    private ?string $parseMode;
    /** @var MessageEntity[]|null */
    private ?array $entities;
    private ?bool $disableWebPagePreview;

    public function __construct(array $payload)
    {
        parent::__construct($payload);

        $this->messageText = $payload['message_text'];
        $this->parseMode = $payload['parse_mode'] ?? null;

        if (isset($payload['entities'])) {
            foreach ((array)$payload['entities'] as $entity) {
                $this->entities[] = new MessageEntity($entity);
            }
        }

        $this->disableWebPagePreview = $payload['disable_web_page_preview'] ?? null;
    }

    public function getMessageText(): string
    {
        return $this->messageText;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    public function getDisableWebPagePreview(): ?bool
    {
        return $this->disableWebPagePreview;
    }
}
