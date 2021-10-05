<?php

namespace Slatch\TelegramBotClient\Entities;

/**
 * @internal
 */
class Message extends BaseEntity
{
    private int $messageId;
    private ?User $from;
    private ?Chat $senderChat;
    private int $date;
    private Chat $chat;
    private ?User $forwardFrom;
    private ?Chat $forwardFromChat;
    private ?int $forwardFromMessageId;
    private ?string $forwardSignature;
    private ?string $forwardSenderName;
    private ?int $forwardDate;
    private ?Message $replyToMessage;
    private ?User $viaBot;
    private ?int $editDate;
    private ?string $mediaGroupId;
    private ?string $authorSignature;
    private ?string $text;
    /** @var ?MessageEntity[] */
    private ?array $entities;
    private ?Animation $animation;
    private ?Audio $audio;
    private ?Document $document;
    /** @var ?PhotoSize[] */
    private ?array $photo;
    private ?Sticker $sticker;
    private ?Video $video;
    private ?VideoNote $videoNote;
    private ?Voice $voice;
    private ?string $caption;
    /** @var ?MessageEntity[] */
    private ?array $captionEntities;
    private ?Contact $contact;
    private ?Dice $dice;
    private ?Game $game;
    private ?Poll $poll;
    private ?Venue $venue;
    private ?Location $location;
    /** @var ?User[] */
    private ?array $newChatMembers;
    private ?User $leftChatMember;
    private ?string $newChatTitle;
    /** @var ?PhotoSize[] */
    private ?array $newChatPhoto;
    private ?bool $deleteChatPhoto;
    private ?bool $groupChatCreated;
    private ?bool $supergroupChatCreated;
    private ?bool $channelChatCreated;
    private ?MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged;
    private ?int $migrateToChatId;
    private ?int $migrateFromChatId;
    private ?Message $pinnedMessage;
    private ?Invoice $invoice;
    private ?SuccessfulPayment $successfulPayment;
    private ?string $connectedWebsite;
    private ?PassportData $passportData;
    private ?ProximityAlertTriggered $proximityAlertTriggered;
    private ?VoiceChatScheduled $voiceChatScheduled;
    private ?VoiceChatStarted $voiceChatStarted;
    private ?VoiceChatEnded $voiceChatEnded;
    private ?VoiceChatParticipantsInvited $voiceChatParticipantsInvited;
    private ?InlineKeyboardMarkup $replyMarkup;

    public function __construct(array $payload)
    {
        $this->messageId = $payload['message_id'];
        $this->from = $payload['from'] ? new User($payload['from']) : null;
        $this->senderChat = $payload['sender_chat'] ? new Chat($payload['sender_chat']) : null;
        $this->date = $payload['date'];
        $this->chat = new Chat($payload['chat']);
        $this->forwardFrom = $payload['forward_from'] ? new User($payload['forward_from']) : null;
        $this->forwardFromChat = $payload['forward_from_chat'] ? new Chat($payload['forward_from_chat']) : null;
        $this->forwardFromMessageId = $payload['forward_from_message_id'] ?? null;
        $this->forwardSignature = $payload['forward_signature'] ?? null;
        $this->forwardSenderName = $payload['forward_sender_name'] ?? null;
        $this->forwardDate = $payload['forward_date'] ?? null;
        $this->replyToMessage = $payload['reply_to_message'] ? new Message($payload['reply_to_message']) : null;
        $this->viaBot = $payload['via_bot'] ? new User($payload['via_bot']) : null;
        $this->editDate = $payload['edit_date'] ?? null;
        $this->mediaGroupId = $payload['media_group_id'] ?? null;
        $this->authorSignature = $payload['author_signature'] ?? null;
        $this->text = $payload['text'] ?? null;

        foreach ((array)$payload['entities'] as $entity) {
            $this->entities[] = new MessageEntity($entity);
        }

        $this->animation = $payload['animation'] ? new Animation($payload['animation']) : null;
        $this->audio = $payload['audio'] ? new Audio($payload['audio']) : null;
        $this->document = $payload['document'] ? new Document($payload['document']) : null;

        foreach ((array)$payload['photo'] as $photo) {
            $this->photo[] = new PhotoSize($photo);
        }

        $this->sticker = $payload['sticker'] ? new Sticker($payload['sticker']) : null;
        $this->video = $payload['video'] ? new Video($payload['video']) : null;
        $this->videoNote = $payload['video_note'] ? new VideoNote($payload['video_note']) : null;
        $this->voice = $payload['voice'] ? new Voice($payload['voice']) : null;
        $this->caption = $payload['caption'] ?? null;

        foreach ((array)$payload['caption_entities'] as $captionEntity) {
            $this->captionEntities[] = new MessageEntity($captionEntity);
        }

        $this->contact = $payload['contact'] ? new Contact($payload['contact']) : null;
        $this->dice = $payload['dice'] ? new Dice($payload['dice']) : null;
        $this->game = $payload['game'] ? new Game($payload['game']) : null;
        $this->poll = $payload['poll'] ? new Poll($payload['poll']) : null;
        $this->venue = $payload['venue'] ? new Venue($payload['venue']) : null;
        $this->location = $payload['location'] ? new Location($payload['location']) : null;

        foreach ((array)$payload['new_chat_members'] as $newChatMember) {
            $this->newChatMembers[] = new User($newChatMember);
        }

        $this->leftChatMember = $payload['left_chat_member'] ? new User($payload['left_chat_member']) : null;
        $this->newChatTitle = $payload['new_chat_title'] ?? null;

        foreach ((array)$payload['new_chat_photo'] as $newChatPhoto) {
            $this->newChatPhoto[] = new PhotoSize($newChatPhoto);
        }

        $this->deleteChatPhoto = $payload['delete_chat_photo'] ?? null;
        $this->groupChatCreated = $payload['group_chat_created'] ?? null;
        $this->supergroupChatCreated = $payload['supergroup_chat_created'] ?? null;
        $this->channelChatCreated = $payload['channel_chat_created'] ?? null;

        $this->messageAutoDeleteTimerChanged = $payload['message_auto_delete_timer_changed'] ? new MessageAutoDeleteTimerChanged(
            $payload['message_auto_delete_timer_changed']
        ) : null;

        $this->migrateToChatId = $payload['migrate_to_chat_id'] ?? null;
        $this->migrateFromChatId = $payload['migrate_from_chat_id'] ?? null;

        $this->pinnedMessage = $payload['pinned_message'] ? new Message($payload['pinned_message']) : null;
        $this->invoice = $payload['invoice'] ? new Invoice($payload['invoice']) : null;
        $this->successfulPayment = $payload['successful_payment'] ? new SuccessfulPayment(
            $payload['successful_payment']
        ) : null;

        $this->connectedWebsite = $payload['connected_website'] ?? null;

        $this->passportData = $payload['passport_data'] ? new PassportData($payload['passport_data']) : null;
        $this->proximityAlertTriggered = $payload['proximity_alert_triggered'] ? new ProximityAlertTriggered(
            $payload['proximity_alert_triggered']
        ) : null;
        $this->voiceChatScheduled = $payload['voice_chat_scheduled'] ? new VoiceChatScheduled(
            $payload['voice_chat_scheduled']
        ) : null;
        $this->voiceChatStarted = $payload['voice_chat_started'] ? new VoiceChatStarted(
            $payload['voice_chat_started']
        ) : null;
        $this->voiceChatEnded = $payload['voice_chat_ended'] ? new VoiceChatEnded($payload['voice_chat_ended']) : null;
        $this->voiceChatParticipantsInvited = $payload['voice_chat_participants_invited'] ? new VoiceChatParticipantsInvited(
            $payload['voice_chat_participants_invited']
        ) : null;
        $this->replyMarkup = $payload['reply_markup'] ? new InlineKeyboardMarkup($payload['reply_markup']) : null;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getFrom(): ?User
    {
        return $this->from;
    }

    public function getSenderChat(): ?Chat
    {
        return $this->senderChat;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getChat(): Chat
    {
        return $this->chat;
    }

    public function getForwardFrom(): ?User
    {
        return $this->forwardFrom;
    }

    public function getForwardFromChat(): ?Chat
    {
        return $this->forwardFromChat;
    }

    public function getForwardFromMessageId(): ?int
    {
        return $this->forwardFromMessageId;
    }

    public function getForwardSignature(): ?string
    {
        return $this->forwardSignature;
    }

    public function getForwardSenderName(): ?string
    {
        return $this->forwardSenderName;
    }

    public function getForwardDate(): ?int
    {
        return $this->forwardDate;
    }

    public function getReplyToMessage(): ?Message
    {
        return $this->replyToMessage;
    }

    public function getViaBot(): ?User
    {
        return $this->viaBot;
    }

    public function getEditDate(): ?int
    {
        return $this->editDate;
    }

    public function getMediaGroupId(): ?string
    {
        return $this->mediaGroupId;
    }

    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function getDice(): ?Dice
    {
        return $this->dice;
    }

    public function getGame(): ?Game
    {
        return $this->game;
    }

    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * @return User[]|null
     */
    public function getNewChatMembers(): ?array
    {
        return $this->newChatMembers;
    }

    public function getLeftChatMember(): ?User
    {
        return $this->leftChatMember;
    }

    public function getNewChatTitle(): ?string
    {
        return $this->newChatTitle;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getNewChatPhoto(): ?array
    {
        return $this->newChatPhoto;
    }

    public function getDeleteChatPhoto(): ?bool
    {
        return $this->deleteChatPhoto;
    }

    public function getGroupChatCreated(): ?bool
    {
        return $this->groupChatCreated;
    }

    public function getSupergroupChatCreated(): ?bool
    {
        return $this->supergroupChatCreated;
    }

    public function getChannelChatCreated(): ?bool
    {
        return $this->channelChatCreated;
    }

    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChanged
    {
        return $this->messageAutoDeleteTimerChanged;
    }

    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    public function getMigrateFromChatId(): ?int
    {
        return $this->migrateFromChatId;
    }

    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function getSuccessfulPayment(): ?SuccessfulPayment
    {
        return $this->successfulPayment;
    }

    public function getConnectedWebsite(): ?string
    {
        return $this->connectedWebsite;
    }

    public function getPassportData(): ?PassportData
    {
        return $this->passportData;
    }

    public function getProximityAlertTriggered(): ?ProximityAlertTriggered
    {
        return $this->proximityAlertTriggered;
    }

    public function getVoiceChatScheduled(): ?VoiceChatScheduled
    {
        return $this->voiceChatScheduled;
    }

    public function getVoiceChatStarted(): ?VoiceChatStarted
    {
        return $this->voiceChatStarted;
    }

    public function getVoiceChatEnded(): ?VoiceChatEnded
    {
        return $this->voiceChatEnded;
    }

    public function getVoiceChatParticipantsInvited(): ?VoiceChatParticipantsInvited
    {
        return $this->voiceChatParticipantsInvited;
    }

    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }
}
