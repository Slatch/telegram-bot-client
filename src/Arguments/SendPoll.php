<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\ForceReply;
use Slatch\TelegramBotClient\Entities\InlineKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\MessageEntity;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardMarkup;
use Slatch\TelegramBotClient\Entities\ReplyKeyboardRemove;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class SendPoll implements \JsonSerializable
{
    /** @var int|string */
    private $chatId;
    private string $question;
    /** @var string[] */
    private array $options;
    private ?bool $isAnonymous = null;
    private ?string $type = null;
    private ?bool $allowsMultipleAnswers = null;
    private ?int $correctOptionId = null;
    private ?string $explanation = null;
    private ?string $explanationParseMode = null;
    /** @var MessageEntity[]|null */
    private ?array $explanationEntities = null;
    private ?int $openPeriod = null;
    private ?int $closeDate = null;
    private ?bool $isClosed = null;
    private ?bool $disableNotification = null;
    private ?int $replyToMessageId = null;
    private ?bool $allowSendingWithoutReply = null;
    /** @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null  */
    private $replyMarkup = null;

    public function jsonSerialize(): array
    {
        return [
                'chat_id' => $this->chatId,
                'question' => $this->question,
                'options' => $this->options,
            ] + TypeFilter::nullable([
                'is_anonymous' => $this->isAnonymous,
                'type' => $this->type,
                'allows_multiple_answers' => $this->allowsMultipleAnswers,
                'correct_option_id' => $this->correctOptionId,
                'explanation' => $this->explanation,
                'explanation_parse_mode' => $this->explanationParseMode,
                'explanation_entities' => $this->explanationEntities,
                'open_period' => $this->openPeriod,
                'close_date' => $this->closeDate,
                'is_closed' => $this->isClosed,
                'disable_notification' => $this->disableNotification,
                'reply_to_message_id' => $this->replyToMessageId,
                'allow_sending_without_reply' => $this->allowSendingWithoutReply,
                'reply_markup' => $this->replyMarkup,
            ]);
    }

    /**
     * @param int|string $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    /**
     * @param string[] $options
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    public function setIsAnonymous(bool $isAnonymous): void
    {
        $this->isAnonymous = $isAnonymous;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function setAllowsMultipleAnswers(bool $allowsMultipleAnswers): void
    {
        $this->allowsMultipleAnswers = $allowsMultipleAnswers;
    }

    public function setCorrectOptionId(int $correctOptionId): void
    {
        $this->correctOptionId = $correctOptionId;
    }

    public function setExplanation(string $explanation): void
    {
        $this->explanation = $explanation;
    }

    public function setExplanationParseMode(string $explanationParseMode): void
    {
        $this->explanationParseMode = $explanationParseMode;
    }

    /**
     * @param MessageEntity[] $explanationEntities
     */
    public function setExplanationEntities(array $explanationEntities): void
    {
        $this->explanationEntities = $explanationEntities;
    }

    public function setOpenPeriod(int $openPeriod): void
    {
        $this->openPeriod = $openPeriod;
    }

    public function setCloseDate(int $closeDate): void
    {
        $this->closeDate = $closeDate;
    }

    public function setIsClosed(bool $isClosed): void
    {
        $this->isClosed = $isClosed;
    }

    public function setDisableNotification(bool $disableNotification): void
    {
        $this->disableNotification = $disableNotification;
    }

    public function setReplyToMessageId(int $replyToMessageId): void
    {
        $this->replyToMessageId = $replyToMessageId;
    }

    public function setAllowSendingWithoutReply(bool $allowSendingWithoutReply): void
    {
        $this->allowSendingWithoutReply = $allowSendingWithoutReply;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove $replyMarkup
     */
    public function setReplyMarkup($replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
