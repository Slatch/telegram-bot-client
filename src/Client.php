<?php

namespace Slatch\TelegramBotClient;

use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Api\ApiConfigInterface;
use Slatch\TelegramBotClient\Api\Method;
use Slatch\TelegramBotClient\Bot\Message;
use Slatch\TelegramBotClient\Bot\Credentials;

class Client
{
    /** @var ApiConfigInterface */
    private $apiConfig;

    /** @var ClientInterface */
    private $client;

    public function __construct(
        ClientInterface $client,
        ApiConfigInterface $apiConfig
    ) {
        $this->client = $client;
        $this->apiConfig = $apiConfig;
    }

    public function sendMessage(Credentials $credentials, Message $message): bool
    {
        $request = new Request(
            'POST',
            $this->generateUrl($credentials->getToken(), Method::SEND_MESSAGE),
            [
                'Accept-Language: ru,en-us'
            ],
            $this->buildStream([
                'chat_id' => $message->getChatId(),
                'text' => $message->getText(),
            ])
        );

        return $this->send($request);
    }

    private function buildStream(array $data): StreamInterface
    {
        $body = array_map(static function ($name, $content) {
            return [
                'name' => $name,
                'contents' => $content,
            ];
        }, array_keys($data), $data);

        return new MultipartStream($body);
    }

    private function send(RequestInterface $request): bool
    {
        return $this->client->sendRequest($request)->getStatusCode() === 200;
    }

    private function generateUrl(string $botToken, string $method): string
    {
        return $this->apiConfig->getHost() . '/bot' . $botToken . '/' . $method;
    }
}
