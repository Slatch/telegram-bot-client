<?php

namespace Slatch\TelegramBotClient\Transfer;

class Transfer implements TransferInterface
{
    public function send(string $uri, array $params = []): bool
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $uri,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_HTTPHEADER => [
                'Accept-Language: ru,en-us'
            ],
            CURLOPT_POSTFIELDS => $params,
        ]);

        $result = curl_exec($curl) !== false;

        curl_close($curl);

        return $result;
    }
}
