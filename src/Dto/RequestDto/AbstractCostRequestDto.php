<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\RequestDto;

abstract class AbstractCostRequestDto implements RequestDtoInterface
{
    public function __construct(
        private readonly ?string $from = null,
        private readonly ?bool $translit = null,
    ) {
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
