<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Enums\EncryptedPassportElementType;

/**
 * @internal
 */
class EncryptedPassportElement extends BaseEntity
{
    /** @see EncryptedPassportElementType */
    private string $type;
    private ?string $data;
    private ?string $phoneNumber;
    private ?string $email;
    /** @var ?PassportFile[] */
    private ?array $files;
    private ?PassportFile $frontSide;
    private ?PassportFile $reverseSide;
    private ?PassportFile $selfie;
    /** @var ?PassportFile[] */
    private ?array $translation;
    private string $hash;


    public function __construct(array $payload)
    {
        $this->type = $payload['type'];
        $this->data = $payload['data'] ?? null;
        $this->phoneNumber = $payload['phone_number'] ?? null;
        $this->email = $payload['email'] ?? null;

        foreach ((array)$payload['files'] as $file) {
            $this->files[] = new PassportFile($file);
        }

        $this->frontSide = $payload['front_side'] ? new PassportFile($payload['front_side']) : null;
        $this->reverseSide = $payload['reverse_side'] ? new PassportFile($payload['reverse_side']) : null;
        $this->selfie = $payload['selfie'] ? new PassportFile($payload['selfie']) : null;

        foreach ((array)$payload['translation'] as $translation) {
            $this->translation[] = new PassportFile($translation);
        }

        $this->hash = $payload['hash'];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return PassportFile[]|null
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    public function getFrontSide(): ?PassportFile
    {
        return $this->frontSide;
    }

    public function getReverseSide(): ?PassportFile
    {
        return $this->reverseSide;
    }

    public function getSelfie(): ?PassportFile
    {
        return $this->selfie;
    }

    /**
     * @return PassportFile[]|null
     */
    public function getTranslation(): ?array
    {
        return $this->translation;
    }

    public function getHash(): string
    {
        return $this->hash;
    }
}
