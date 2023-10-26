<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\RequestDto;

class CostRequestDto extends AbstractCostRequestDto
{
    public function __construct(
        private readonly array $to,
        private readonly string $msg,
        ?string $from = null,
        ?bool $translit = null,
    ) {
        parent::__construct($from, $translit);
    }

    public function getTo(): array
    {
        return $this->to;
    }

    public function getMsg(): string
    {
        return $this->msg;
    }
}
