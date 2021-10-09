<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InputFile;

class SetChatPhoto implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private InputFile $photo;

    public function jsonSerialize(): array
    {
        return [
            'chat_id' => $this->chatId,
            'photo' => $this->photo,
        ];
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setPhoto(InputFile $photo): void
    {
        $this->photo = $photo;
    }
}
