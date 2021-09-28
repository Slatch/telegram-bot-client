<?php

namespace Slatch\TelegramBotClient\Transfer;

interface TransferInterface
{
    public function send(string $uri, array $params = []): bool;
}
