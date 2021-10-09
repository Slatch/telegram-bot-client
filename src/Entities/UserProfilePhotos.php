<?php

namespace Slatch\TelegramBotClient\Entities;

class UserProfilePhotos extends BaseEntity
{
    private int $totalCount;
    /** @var PhotoSize[][] */
    private array $photos;

    public function __construct(array $payload)
    {
        $this->totalCount = $payload['total_count'];

        foreach ((array)$payload['photos'] as $key => $photos) {
            foreach ($photos as $photo) {
                $this->photos[$key][] = new PhotoSize($photo);
            }
        }
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return PhotoSize[][]
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }
}
