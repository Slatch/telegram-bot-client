<?php

namespace unit\src\Api;

use Slatch\TelegramBotClient\Api\Config;
use Slatch\TelegramBotClient\Exceptions\ApiHostValidationException;

class ConfigTest extends \Codeception\Test\Unit
{
    public function validHostsDataProvider(): array
    {
        return [
            'http scheme' => ['http://example.com', 'http://example.com'],
            'https scheme' => ['https://www.example.com', 'https://www.example.com'],
            'ftp scheme with path' => ['ftp://www.example.com/with/path', 'ftp://www.example.com/with/path'],
            'trailing slash' => ['https://www.example.com/with/path/', 'https://www.example.com/with/path'],
            'query' => ['https://www.example.com/with/path?and=query', 'https://www.example.com/with/path'],
            'all url parts given' => ['http://username:password@hostname:9090/path?arg=value#anchor', 'http://hostname/path'],
        ];
    }

    /**
     * @dataProvider validHostsDataProvider
     */
    public function testGetHost(string $host, string $expected)
    {
        $config = new Config($host);

        self::assertEquals($expected, $config->getHost());
    }

    public function invalidHostsDataProvider(): array
    {
        return [
            'no scheme' => ['example.com'],
            'no scheme with slashes' => ['//example.com'],
            'no scheme with path' => ['example.com/with/path'],
        ];
    }

    /**
     * @dataProvider invalidHostsDataProvider
     */
    public function testValidationFails(string $host)
    {
        $this->expectException(ApiHostValidationException::class);
        new Config($host);
    }
}
