<?php

namespace Slatch\TelegramBotClient\Arguments;

use Slatch\TelegramBotClient\Entities\InlineQueryResult;
use Slatch\TelegramBotClient\Filters\TypeFilter;

class AnswerInline implements \JsonSerializable
{
    private string $inlineQueryId;
    /** @var InlineQueryResult[] */
    private array $results;
    private ?int $cacheTime;
    private ?bool $isPersonal;
    private ?string $nextOffset;
    private ?string $switchPmText;
    private ?string $switchPmParameter;

    public function jsonSerialize(): array
    {
        return [
                'inline_query_id' => $this->inlineQueryId,
                'results' => $this->results,
            ] + TypeFilter::nullable([
                'cache_time' => $this->cacheTime,
                'is_personal' => $this->isPersonal,
                'next_offset' => $this->nextOffset,
                'switch_pm_text' => $this->switchPmText,
                'switch_pm_parameter' => $this->switchPmParameter,
            ]);
    }

    public function setInlineQueryId(string $inlineQueryId): void
    {
        $this->inlineQueryId = $inlineQueryId;
    }

    /**
     * @param InlineQueryResult[] $results
     */
    public function setResults(array $results): void
    {
        $this->results = $results;
    }

    public function setCacheTime(int $cacheTime): void
    {
        $this->cacheTime = $cacheTime;
    }

    public function setIsPersonal(bool $isPersonal): void
    {
        $this->isPersonal = $isPersonal;
    }

    public function setNextOffset(string $nextOffset): void
    {
        $this->nextOffset = $nextOffset;
    }

    public function setSwitchPmText(string $switchPmText): void
    {
        $this->switchPmText = $switchPmText;
    }

    public function setSwitchPmParameter(string $switchPmParameter): void
    {
        $this->switchPmParameter = $switchPmParameter;
    }
}
