<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class PassportData extends BaseEntity
{
    /** @var EncryptedPassportElement[] */
    private array $data = [];
    private EncryptedCredentials $credentials;
    
    public function __construct(array $payload)
    {
        foreach ((array)$payload['data'] as $datum) {
            $this->data[] = new EncryptedPassportElement($datum);
        }
        $this->credentials = new EncryptedCredentials($payload['credentials']);
    }

    /**
     * @return EncryptedPassportElement[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return EncryptedCredentials
     */
    public function getCredentials(): EncryptedCredentials
    {
        return $this->credentials;
    }
}
