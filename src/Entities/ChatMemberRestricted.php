<?php

namespace Slatch\TelegramBotClient\Entities;

class ChatMemberRestricted extends ChatMember
{
    private bool $canBeEdited;
    private bool $isAnonymous;
    private bool $isMember;
    private bool $canChangeInfo;
    private bool $canInviteUsers;
    private bool $canPinMessages;
    private bool $canSendMessages;
    private bool $canSendMediaMessages;
    private bool $canSendPolls;
    private bool $canSendOtherMessages;
    private bool $canAddWebPagePreviews;
    private int $untilDate;

    public function __construct(array $payload)
    {
        parent::__construct($payload);
        $this->canBeEdited = $payload['can_be_edited'];
        $this->isAnonymous = $payload['is_anonymous'];
        $this->isMember = $payload['is_member'];
        $this->canChangeInfo = $payload['can_change_info'];
        $this->canInviteUsers = $payload['can_invite_users'];
        $this->canPinMessages = $payload['can_pin_messages'];
        $this->canSendMessages = $payload['can_send_messages'];
        $this->canSendMediaMessages = $payload['can_send_media_messages'];
        $this->canSendPolls = $payload['can_send_polls'];
        $this->canSendOtherMessages = $payload['can_send_other_messages'];
        $this->canAddWebPagePreviews = $payload['can_add_web_page_previews'];
        $this->untilDate = $payload['until_date'];
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function isMember(): bool
    {
        return $this->isMember;
    }

    public function isCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function isCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function getCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    public function getCanSendMessages(): bool
    {
        return $this->canSendMessages;
    }

    public function getCanSendMediaMessages(): bool
    {
        return $this->canSendMediaMessages;
    }

    public function getCanSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    public function getCanSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    public function getCanAddWebPagePreviews(): bool
    {
        return $this->canAddWebPagePreviews;
    }

    public function getUntilDate(): int
    {
        return $this->untilDate;
    }
}
