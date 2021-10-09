<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Exceptions\NotImplementedException;

/**
 * @internal
 */
class InlineQueryResultArticle extends InlineQueryResult
{
    private string $title;
    private InputMessageContent $inputMessageContent;
    private ?string $url;
    private ?bool $hideUrl;
    private ?string $description;
    private ?string $thumbUrl;
    private ?int $thumbWidth;
    private ?int $thumbHeight;

    public function __construct(array $payload)
    {
        parent::__construct($payload);

        $this->title = $payload['title'];

        $this->inputMessageContent = new InputMessageContent($payload['input_message_content']);
        throw new NotImplementedException();

        $this->url = $payload['url'] ?? null;
        $this->hideUrl = $payload['hide_url'] ?? null;
        $this->description = $payload['description'] ?? null;
        $this->thumbUrl = $payload['thumb_url'] ?? null;
        $this->thumbWidth = $payload['thumb_width'] ?? null;
        $this->thumbHeight = $payload['thumb_height'] ?? null;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getHideUrl(): ?bool
    {
        return $this->hideUrl;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    public function getThumbWidth(): ?int
    {
        return $this->thumbWidth;
    }

    public function getThumbHeight(): ?int
    {
        return $this->thumbHeight;
    }
}
