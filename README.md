# telegram-bot-client
Client for https://core.telegram.org/bots/api

Installing:
```bash
composer require "slatch/telegram-bot-client"
```

Usage:

```php
use GuzzleHttp\Client;

use Slatch\TelegramBotClient\Api\Config;
use Slatch\TelegramBotClient\Client as TelegramClient;
use Slatch\TelegramBotClient\Bot\Message;
use Slatch\TelegramBotClient\Transfer\Transfer;
use Slatch\TelegramBotClient\Bot\Credentials;

...

$apiConfig = new Config('https://api.telegram.org');
$client = new TelegramClient(new Client(), $apiConfig);

$client->sendMessage(new Credentials($telegramApiToken), new Message($chatId, $text));
$client->sendMessage(new Credentials($telegramApiToken), new Message($anotherChatId, $anotherText));
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
