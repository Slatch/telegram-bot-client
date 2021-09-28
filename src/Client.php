<?php

namespace Slatch\TelegramBotClient;

use Slatch\TelegramBotClient\Api\ApiConfigInterface;
use Slatch\TelegramBotClient\Api\Method;
use Slatch\TelegramBotClient\Dto\Message;
use Slatch\TelegramBotClient\Transfer\TransferInterface;

class Client
{
    /** @var TransferInterface */
    private $transfer;

    /** @var ApiConfigInterface */
    private $apiConfig;

    public function __construct(TransferInterface $transfer, ApiConfigInterface $apiConfig)
    {
        $this->transfer = $transfer;
        $this->apiConfig = $apiConfig;
    }

    public function sendMessage(string $botToken, Message $message): bool
    {
        return $this->botSend($botToken, [
            'chat_id' => $message->getChatId(),
            'text' => $message->getText(),
        ], Method::SEND_MESSAGE);
    }

    private function botSend(string $botToken, array $params, string $method): bool
    {
        $url = $this->generateUrl($botToken, $method);

        return $this->transfer->send($url, $params);
    }

    private function generateUrl(string $botToken, string $method): string
    {
        return $this->apiConfig->getHost() . '/bot' . $botToken . '/' . $method;
    }
}
