<?php

namespace Slatch\TelegramBotClient\Entities;

class ChatPermissions extends BaseEntity
{
    private bool $canSendMessages;
    private bool $canSendMediaMessages;
    private bool $canSendPolls;
    private bool $canSendOtherMessages;
    private bool $canAddWebPagePreviews;
    private bool $canChangeInfo;
    private bool $canInviteUsers;
    private bool $canPinMessages;

    public function __construct(array $payload)
    {
        $this->canSendMessages = $payload['can_send_messages'];
        $this->canSendMediaMessages = $payload['can_send_media_messages'];
        $this->canSendPolls = $payload['can_send_polls'];
        $this->canSendOtherMessages = $payload['can_send_other_messages'];
        $this->canAddWebPagePreviews = $payload['can_add_web_page_previews'];
        $this->canChangeInfo = $payload['can_change_info'];
        $this->canInviteUsers = $payload['can_invite_users'];
        $this->canPinMessages = $payload['can_pin_messages'];
    }

    public function isCanSendMessages(): bool
    {
        return $this->canSendMessages;
    }

    public function isCanSendMediaMessages(): bool
    {
        return $this->canSendMediaMessages;
    }

    public function isCanSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    public function isCanSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    public function isCanAddWebPagePreviews(): bool
    {
        return $this->canAddWebPagePreviews;
    }

    public function isCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function isCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function isCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }
}
