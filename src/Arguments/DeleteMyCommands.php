<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\BotCommandScope;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class DeleteMyCommands implements \JsonSerializable
{
    private ?BotCommandScope $scope;
    private ?string $languageCode;

    public function jsonSerialize(): array
    {
        return TypeFilter::nullable([
            'scope' => $this->scope,
            'language_code' => $this->languageCode,
        ]);
    }

    public function setScope(BotCommandScope $scope): void
    {
        $this->scope = $scope;
    }

    public function setLanguageCode(string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }
}
