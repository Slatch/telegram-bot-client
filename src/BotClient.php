<?php

namespace Slatch\TelegramBotClient;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Api\ApiConfigInterface;
use Slatch\TelegramBotClient\Bot\Credentials;
use Slatch\TelegramBotClient\Entities\BaseEntity;
use Slatch\TelegramBotClient\Entities\Message;
use Slatch\TelegramBotClient\Http\Method;
use Slatch\TelegramBotClient\Methods\GetMe;
use Slatch\TelegramBotClient\Entities\User;
use Slatch\TelegramBotClient\Methods\SendMessage;

class BotClient
{
    private ClientInterface $httpClient;
    private Credentials $credentials;
    private ApiConfigInterface $apiConfig;

    public function __construct(
        ClientInterface $httpClient,
        Credentials $credentials,
        ApiConfigInterface $apiConfig
    ) {
        $this->httpClient = $httpClient;
        $this->credentials = $credentials;
        $this->apiConfig = $apiConfig;
    }

    public function getMe(): User
    {
        $method = new GetMe();

        $request = $this->buildRequest($method->getMethod());
        $response = $this->sendRequest($request);

        return $this->parseResponse(User::class, $response->getBody());
    }

    public function sendMessage(\Slatch\TelegramBotClient\Arguments\SendMessageArgument $sendMessage): Message
    {
        $method = new SendMessage();
        $request = $this->buildRequest($method->getMethod(), $sendMessage);
        $response = $this->sendRequest($request);

        return $this->parseResponse(Message::class, $response->getBody());
    }

    private function buildStream(\JsonSerializable $arguments = null): StreamInterface
    {
        return Utils::streamFor(json_encode($arguments));
    }

    private function buildRequest(string $method, \JsonSerializable $arguments = null): RequestInterface
    {
        return new Request(
            Method::POST,
            $this->generateUrl($method),
            [
                'Content-Type' => 'application/json',
                'Accept-Language' => 'ru,en-us',
            ],
            $this->buildStream($arguments)
        );
    }

    private function parseResponse(string $resultClass, StreamInterface $stream): BaseEntity
    {
        return new $resultClass(json_decode($stream->getContents(), true)['result']);
    }

    private function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient->sendRequest($request);
    }

    private function generateUrl(string $method): string
    {
        return $this->apiConfig->getHost() . '/bot' . $this->credentials->getToken() . '/' . $method;
    }
}
