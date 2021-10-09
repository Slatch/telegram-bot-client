<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Enums\ChatType;

/**
 * @internal
 */
class Chat extends BaseEntity
{
    private int $id;
    /** @see ChatType */
    private string $type;
    private ?string $title;
    private ?string $username;
    private ?string $firstName;
    private ?string $lastName;
    private ?ChatPhoto $photo;
    private ?string $bio;
    private ?string $description;
    private ?string $inviteLink;
    private ?Message $pinnedMessage;
    private ?ChatPermissions $permissions;
    private ?int $slowModeDelay;
    private ?int $messageAutoDeleteTime;
    private ?string $stickerSetName;
    private ?bool $canSetStickerSet;
    private ?int $linkedChatId;
    private ?ChatLocation $location;

    public function __construct(array $payload)
    {
        $this->id = $payload['id'];
        $this->type = $payload['type'];
        $this->title = $payload['title'] ?? null;
        $this->username = $payload['username'] ?? null;
        $this->firstName = $payload['first_name'] ?? null;
        $this->lastName = $payload['last_name'] ?? null;
        $this->photo = isset($payload['photo']) ? new ChatPhoto($payload['photo']) : null;
        $this->bio = $payload['bio'] ?? null;
        $this->description = $payload['description'] ?? null;
        $this->inviteLink = $payload['inviteLink'] ?? null;
        $this->pinnedMessage = isset($payload['pinned_message']) ? new Message($payload['pinned_message']) : null;
        $this->permissions = isset($payload['permissions']) ? new ChatPermissions($payload['permissions']) : null;
        $this->slowModeDelay = $payload['slow_mode_delay'] ?? null;
        $this->messageAutoDeleteTime = $payload['message_auto_delete_time'] ?? null;
        $this->stickerSetName = $payload['sticker_set_name'] ?? null;
        $this->canSetStickerSet = $payload['can_set_sticker_set'] ?? null;
        $this->linkedChatId = $payload['linked_chat_id'] ?? null;
        $this->location = isset($payload['location']) ? new ChatLocation($payload['location']) : null;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getInviteLink(): ?string
    {
        return $this->inviteLink;
    }

    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    public function getPermissions(): ?ChatPermissions
    {
        return $this->permissions;
    }

    public function getSlowModeDelay(): ?int
    {
        return $this->slowModeDelay;
    }

    public function getMessageAutoDeleteTime(): ?int
    {
        return $this->messageAutoDeleteTime;
    }

    public function getStickerSetName(): ?string
    {
        return $this->stickerSetName;
    }

    public function getCanSetStickerSet(): ?bool
    {
        return $this->canSetStickerSet;
    }

    public function getLinkedChatId(): ?int
    {
        return $this->linkedChatId;
    }

    public function getLocation(): ?ChatLocation
    {
        return $this->location;
    }
}
