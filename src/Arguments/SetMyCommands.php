<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\BotCommand;
use Slatch\TelegramBotClient\Entities\BotCommandScope;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SetMyCommands implements \JsonSerializable
{
    /** @var BotCommand[] */
    private array $commands;
    private ?BotCommandScope $scope = null;
    private ?string $languageCode = null;

    public function jsonSerialize(): array
    {
        return [
                'commands' => $this->commands,
            ] + TypeFilter::nullable([
                'scope' => $this->scope,
                'language_code' => $this->languageCode,
            ]);
    }

    /**
     * @param BotCommand[] $commands
     */
    public function setCommands(array $commands): void
    {
        $this->commands = $commands;
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
