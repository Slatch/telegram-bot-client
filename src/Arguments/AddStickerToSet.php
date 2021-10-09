<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InputFile;
use Slatch\TelegramBotClient\Entities\MaskPosition;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class AddStickerToSet implements \JsonSerializable
{
    private int $userId;
    private string $name;
    /** @var InputFile|string|null */
    private $pngSticker = null;
    private ?InputFile $tgsSticker = null;
    private string $emojis;
    private ?MaskPosition $maskPosition = null;

    public function jsonSerialize(): array
    {
        return [
                'user_id' => $this->userId,
                'name' => $this->name,
                'emojis' => $this->emojis,
            ] + TypeFilter::nullable([
                'png_sticker' => $this->pngSticker,
                'tgs_sticker' => $this->tgsSticker,
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

    public function setMaskPosition(MaskPosition $maskPosition): void
    {
        $this->maskPosition = $maskPosition;
    }
}
