<?php

namespace unit\src;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Slatch\TelegramBotClient\Api\ApiConfigInterface;
use Slatch\TelegramBotClient\Bot\Credentials;
use Slatch\TelegramBotClient\Bot\Message;
use Slatch\TelegramBotClient\Client;

class ClientTest extends \Codeception\Test\Unit
{
    public function testSendMessageFailsOnBadRequest()
    {
        $exception = $this->getMockBuilder(ClientExceptionInterface::class)->getMock();

        $client = $this->getMockBuilder(ClientInterface::class)->getMock();
        $client
            ->method('sendRequest')
            ->willThrowException($exception);

        $apiConfig = $this->getMockBuilder(ApiConfigInterface::class)->getMock();
        $apiConfig
            ->method('getHost')
            ->willReturn('');

        $telegramClient = new Client($client, $apiConfig);
        $this->expectException(ClientExceptionInterface::class);

        $telegramClient->sendMessage(new Credentials(''), new Message(0, ''));
    }

    public function testSendMessageFailsOnBadResponse()
    {
        $response = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $response
            ->method('getStatusCode')
            ->willReturn(404);

        $client = $this->getMockBuilder(ClientInterface::class)->getMock();
        $client
            ->method('sendRequest')
            ->willReturn($response);

        $apiConfig = $this->getMockBuilder(ApiConfigInterface::class)->getMock();
        $apiConfig->method('getHost')->willReturn('');

        $telegramClient = new Client($client, $apiConfig);

        $result = $telegramClient->sendMessage(new Credentials(''), new Message(0, ''));

        self::assertFalse($result);
    }

    public function testSendMessage()
    {
        $response = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $response
            ->method('getStatusCode')
            ->willReturn(200);

        $client = $this->getMockBuilder(ClientInterface::class)->getMock();
        $client
            ->method('sendRequest')
            ->willReturn($response);

        $apiConfig = $this->getMockBuilder(ApiConfigInterface::class)->getMock();
        $apiConfig->method('getHost')->willReturn('');

        $telegramClient = new Client($client, $apiConfig);

        $result = $telegramClient->sendMessage(new Credentials(''), new Message(0, ''));

        self::assertTrue($result);
    }
}
