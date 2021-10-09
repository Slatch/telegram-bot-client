<?php

namespace Slatch\TelegramBotClient\Entities;

class ChatMemberAdministrator extends ChatMember
{
    private bool $canBeEdited;
    private bool $isAnonymous;
    private bool $canManageChat;
    private bool $canDeleteMessages;
    private bool $canManageVoiceChats;
    private bool $canRestrictMembers;
    private bool $canPromoteMembers;
    private bool $canChangeInfo;
    private bool $canInviteUsers;
    private ?bool $canPostMessages;
    private ?bool $canEditMessages;
    private ?bool $canPinMessages;
    private ?string $customTitle;

    public function __construct(array $payload)
    {
        parent::__construct($payload);
        $this->canBeEdited = $payload['can_be_edited'];
        $this->isAnonymous = $payload['is_anonymous'];
        $this->canManageChat = $payload['can_manage_chat'];
        $this->canDeleteMessages = $payload['can_delete_messages'];
        $this->canManageVoiceChats = $payload['can_manage_voice_chats'];
        $this->canRestrictMembers = $payload['can_restrict_members'];
        $this->canPromoteMembers = $payload['can_promote_members'];
        $this->canChangeInfo = $payload['can_change_info'];
        $this->canInviteUsers = $payload['can_invite_users'];
        $this->canPostMessages = $payload['can_post_messages'] ?? null;
        $this->canEditMessages = $payload['can_edit_messages'] ?? null;
        $this->canPinMessages = $payload['can_pin_messages'] ?? null;
        $this->customTitle = $payload['custom_title'] ?? null;
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function isCanManageChat(): bool
    {
        return $this->canManageChat;
    }

    public function isCanDeleteMessages(): bool
    {
        return $this->canDeleteMessages;
    }

    public function isCanManageVoiceChats(): bool
    {
        return $this->canManageVoiceChats;
    }

    public function isCanRestrictMembers(): bool
    {
        return $this->canRestrictMembers;
    }

    public function isCanPromoteMembers(): bool
    {
        return $this->canPromoteMembers;
    }

    public function isCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function isCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function getCanPostMessages(): ?bool
    {
        return $this->canPostMessages;
    }

    public function getCanEditMessages(): ?bool
    {
        return $this->canEditMessages;
    }

    public function getCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }
}
