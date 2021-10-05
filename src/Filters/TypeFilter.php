<?php

namespace Slatch\TelegramBotClient\Filters;

class TypeFilter
{
    public static function nullable(array $arguments): array
    {
        return array_filter($arguments, static function ($value) {
            return $value !== null;
        });
    }
}
