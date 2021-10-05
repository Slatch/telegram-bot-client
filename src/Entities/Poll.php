<?php

namespace Slatch\TelegramBotClient\Entities;

use Slatch\TelegramBotClient\Enums\PollType;

/**
 * @internal
 */
class Poll extends BaseEntity
{
    private string $id;
    private string $question;
    /** @var PollOption[] */
    private array $options = [];
    private int $totalVoterCount;
    private bool $isClosed;
    private bool $isAnonymous;
    /** @see PollType */
    private string $type;
    private bool $allowsMultipleAnswers;
    private ?int $correctOptionId;
    private ?string $explanation;
    /** @var ?MessageEntity[] */
    private ?array $explanationEntities;
    private ?int $openPeriod;
    private ?int $closeDate;

    public function __construct(array $payload)
    {
        $this->id = $payload['id'];
        $this->question = $payload['question'];
        foreach ((array)$payload['options'] as $option) {
            $this->options[] = new PollOption($option);
        }
        $this->totalVoterCount = $payload['total_voter_count'];
        $this->isClosed = $payload['is_closed'];
        $this->isAnonymous = $payload['is_anonymous'];
        $this->type = $payload['type'];
        $this->allowsMultipleAnswers = $payload['allows_multiple_answers'];
        $this->correctOptionId = $payload['correct_option_id'] ?? null;
        $this->explanation = $payload['explanation'] ?? null;
        foreach ($payload['explanation_entities'] as $explanationEntity) {
            $this->explanationEntities[] = new MessageEntity($explanationEntity);
        }
        $this->openPeriod = $payload['open_period'] ?? null;
        $this->closeDate = $payload['close_date'] ?? null;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @return PollOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    public function getTotalVoterCount(): int
    {
        return $this->totalVoterCount;
    }

    public function isClosed(): bool
    {
        return $this->isClosed;
    }

    public function isAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function isAllowsMultipleAnswers(): bool
    {
        return $this->allowsMultipleAnswers;
    }

    public function getCorrectOptionId(): ?int
    {
        return $this->correctOptionId;
    }

    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getExplanationEntities(): ?array
    {
        return $this->explanationEntities;
    }

    public function getOpenPeriod(): ?int
    {
        return $this->openPeriod;
    }

    public function getCloseDate(): ?int
    {
        return $this->closeDate;
    }
}
