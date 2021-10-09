<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InputFile;

class UploadStickerFile implements \JsonSerializable
{
    private int $userId;
    private InputFile $pngSticker;

    public function jsonSerialize(): array
    {
        return [
            'user_id' => $this->userId,
            'png_sticker' => $this->pngSticker,
        ];
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function setPngSticker(InputFile $pngSticker): void
    {
        $this->pngSticker = $pngSticker;
    }
}
