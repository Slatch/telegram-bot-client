<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class SetChatDescriptionArgument implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private ?string $description;

    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
            ] + TypeFilter::nullable([
                'description' => $this->description,
            ]);
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
