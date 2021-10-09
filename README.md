# telegram-bot-client
Client for https://core.telegram.org/bots/api

Installing:
```bash
composer require "slatch/telegram-bot-client"
```

Usage:

```php
use Slatch\TelegramBotClient\Api\Config;
use Slatch\TelegramBotClient\BotClient;
use Slatch\TelegramBotClient\Bot\Credentials;
use Slatch\TelegramBotClient\Arguments\SendMessage;

...

$botClient = new BotClient($httpClient, new Credentials($token), new Config('https://api.telegram.org'));

$message = new SendMessage();
$message->setChatId(12345678);
$message->setText("Hello World!");

$botClient->sendMessage($message);
```

Testing:

codeception:
```bash
docker run --rm --interactive --tty --volume ${PWD}:/app composer require "codeception/codeception" --dev -W
```



bootstrap
```bash
docker run -it --rm --name tests -v ${PWD}:/usr/src/myapp -w /usr/src/myapp php:8.0-cli php ./vendor/bin/codecept bootstrap
```

run
```bash
docker run -it --rm --name tests -v ${PWD}:/usr/src/myapp -w /usr/src/myapp php:8.0-cli php ./vendor/bin/codecept run
```
