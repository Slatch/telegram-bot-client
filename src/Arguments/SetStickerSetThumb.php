<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InputFile;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SetStickerSetThumb implements \JsonSerializable
{
    private string $name;
    private int $userId;
    /** @var InputFile|string|null */
    private $thumb;

    public function jsonSerialize(): array
    {
        return [
                'name' => $this->name,
                'user_id' => $this->userId,
            ] + TypeFilter::nullable([
                'thumb' => $this->thumb,
            ]);
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @param InputFile|string $thumb
     */
    public function setThumb($thumb): void
    {
        $this->thumb = $thumb;
    }
}
