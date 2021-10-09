<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Filters\TypeFilter;

class PromoteChatMember implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private int $userId;
    private ?bool $isAnonymous = null;
    private ?bool $canManageChat = null;
    private ?bool $canPostMessages = null;
    private ?bool $canEditMessages = null;
    private ?bool $canDeleteMessages = null;
    private ?bool $canManageVoiceChats = null;
    private ?bool $canRestrictMembers = null;
    private ?bool $canPromoteMembers = null;
    private ?bool $canChangeInfo = null;
    private ?bool $canInviteUsers = null;
    private ?bool $canPinMessages = null;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'user_id' => $this->userId,
            ] + TypeFilter::nullable([
                'is_anonymous' => $this->isAnonymous,
                'can_manage_chat' => $this->canManageChat,
                'can_post_messages' => $this->canPostMessages,
                'can_edit_messages' => $this->canEditMessages,
                'can_delete_messages' => $this->canDeleteMessages,
                'can_manage_voice_chats' => $this->canManageVoiceChats,
                'can_restrict_members' => $this->canRestrictMembers,
                'can_promote_members' => $this->canPromoteMembers,
                'can_change_info' => $this->canChangeInfo,
                'can_invite_users' => $this->canInviteUsers,
                'can_pin_messages' => $this->canPinMessages,
            ]);
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function setIsAnonymous(bool $isAnonymous): void
    {
        $this->isAnonymous = $isAnonymous;
    }

    public function setCanManageChat(int $canManageChat): void
    {
        $this->canManageChat = $canManageChat;
    }

    public function setCanPostMessages(bool $canPostMessages): void
    {
        $this->canPostMessages = $canPostMessages;
    }

    public function setCanEditMessages(bool $canEditMessages): void
    {
        $this->canEditMessages = $canEditMessages;
    }

    public function setCanDeleteMessages(bool $canDeleteMessages): void
    {
        $this->canDeleteMessages = $canDeleteMessages;
    }

    public function setCanManageVoiceChats(bool $canManageVoiceChats): void
    {
        $this->canManageVoiceChats = $canManageVoiceChats;
    }

    public function setCanRestrictMembers(bool $canRestrictMembers): void
    {
        $this->canRestrictMembers = $canRestrictMembers;
    }

    public function setCanPromoteMembers(bool $canPromoteMembers): void
    {
        $this->canPromoteMembers = $canPromoteMembers;
    }

    public function setCanChangeInfo(bool $canChangeInfo): void
    {
        $this->canChangeInfo = $canChangeInfo;
    }

    public function setCanInviteUsers(bool $canInviteUsers): void
    {
        $this->canInviteUsers = $canInviteUsers;
    }

    public function setCanPinMessages(bool $canPinMessages): void
    {
        $this->canPinMessages = $canPinMessages;
    }
}
