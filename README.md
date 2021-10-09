# telegram-bot-client
PHP client for telegram

Requirements
---

- PHP 7.4 or higher
- curl
- [PSR-18 http client](https://www.php-fig.org/psr/psr-18/) (for example, [guzzle](https://github.com/guzzle/guzzle))

Installing
---
```bash
composer require "slatch/telegram-bot-client"
```

Usage
---

List of available methods: https://core.telegram.org/bots/api#available-methods

Example:
```php
use Slatch\TelegramBotClient\Api\Config;
use Slatch\TelegramBotClient\Arguments\SendMessage;
use Slatch\TelegramBotClient\BotClient;
use Slatch\TelegramBotClient\Bot\Credentials;

...

// Initialize bot client
$botClient = new BotClient($httpClient, new Credentials($token), new Config('https://api.telegram.org'));

// Prepare message
$message = new SendMessage();
$message->setChatId(12345678);
$message->setText("Hello World!");

// Send
$botClient->sendMessage($message);
```
