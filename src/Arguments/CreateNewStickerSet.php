<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InputFile;
use Slatch\TelegramBotClient\Entities\MaskPosition;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class CreateNewStickerSet implements \JsonSerializable
{
    private int $userId;
    private string $name;
    private string $title;
    /** @var InputFile|string|null */
    private $pngSticker;
    private ?InputFile $tgsSticker;
    private string $emojis;
    private ?bool $containsMasks;
    private ?MaskPosition $maskPosition;

    public function jsonSerialize(): array
    {
        return [
                'user_id' => $this->userId,
                'name' => $this->name,
                'title' => $this->title,
                'emojis' => $this->emojis,
            ] + TypeFilter::nullable([
                'png_sticker' => $this->pngSticker,
                'tgs_sticker' => $this->tgsSticker,
                'contains_masks' => $this->containsMasks,
                'mask_position' => $this->maskPosition,
            ]);
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param InputFile|string $pngSticker
     */
    public function setPngSticker($pngSticker): void
    {
        $this->pngSticker = $pngSticker;
    }

    public function setTgsSticker(InputFile $tgsSticker): void
    {
        $this->tgsSticker = $tgsSticker;
    }

    public function setEmojis(string $emojis): void
    {
        $this->emojis = $emojis;
    }

    public function setContainsMasks(bool $containsMasks): void
    {
        $this->containsMasks = $containsMasks;
    }

    public function setMaskPosition(MaskPosition $maskPosition): void
    {
        $this->maskPosition = $maskPosition;
    }
}
