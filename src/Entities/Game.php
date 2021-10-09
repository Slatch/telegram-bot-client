<?php

namespace Slatch\TelegramBotClient\Entities;

class Game extends BaseEntity
{
    private string $title;
    private string $description;
    /** @var PhotoSize[] */
    private array $photo = [];
    private ?string $text;
    /** @var ?MessageEntity[] */
    private ?array $textEntities;
    private ?Animation $animation;

    public function __construct(array $payload)
    {
        $this->title = $payload['title'];
        $this->description = $payload['description'];
        foreach ((array)$payload['photo'] as $photo) {
            $this->photo[] = new PhotoSize($photo);
        }
        $this->text = $payload['text'] ?? null;
        if (isset($payload['text_entities'])) {
            foreach ((array)$payload['text_entities'] as $textEntity) {
                $this->textEntities[] = new MessageEntity($textEntity);
            }
        }
        $this->animation = isset($payload['animation']) ? new Animation($payload['animation']) : null;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return PhotoSize[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getTextEntities(): ?array
    {
        return $this->textEntities;
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }
}
