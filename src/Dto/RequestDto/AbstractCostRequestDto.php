<?php

namespace Sun\SmsRu\Dto\RequestDto;

abstract class AbstractCostRequestDto implements RequestDtoInterface
{
    private ?string $from;
    private ?bool $translit;

    public function __construct(?string $from = null, ?bool $translit = null)
    {
        $this->from = $from;
        $this->translit = $translit;
    }

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function getTranslit(): ?bool
    {
        return $this->translit;
    }
}
