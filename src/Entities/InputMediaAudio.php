<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Enums\InputMediaTypes;
use Slatch\TelegramBotClient\Exceptions\NotImplementedException;

class InputMediaAudio extends BaseEntity
{
    /** @see InputMediaTypes::TYPE_AUDIO */
    private string $type;
    private string $media;
    /** @var InputFile|string|null */
    private $thumb;
    private ?string $caption;
    private ?string $parseMode;
    /** @var null|MessageEntity[] */
    private array $captionEntities;
    private int $duration;
    private ?string $performer;
    private ?string $title;

    public function __construct(array $payload)
    {
        $this->type = $payload['type'];
        $this->media = $payload['media'];

        $this->thumb = isset($payload['thumb']) ? new InputFile($payload['thumb']) : null; throw new NotImplementedException();

        $this->caption = $payload['caption'] ?? null;
        $this->parseMode = $payload['parse_mode'] ?? null;

        foreach ($payload['caption_entities'] as $captionEntity) {
            $this->captionEntities[] = new MessageEntity($captionEntity);
        }

        $this->duration = $payload['duration'] ?? null;
        $this->performer = $payload['performer'] ?? null;
        $this->title = $payload['mime_type'] ?? null;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * @return InputFile|string|null
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * @return null|MessageEntity[]
     */
    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }
}
